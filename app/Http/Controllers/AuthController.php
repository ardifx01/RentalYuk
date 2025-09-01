<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * Melakukan Proses Pendaftaran akun / Register pengguna
     *
     * @return void
     */
    public function userRegister(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'nullable|string|max:20',
            'password' => 'required|string|min:6|confirmed', // needs password_confirmation field
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'password' => Hash::make($validated['password']),
            'role' => 'owner', // default
        ]);
        Auth::login($user);
        session(['name' => $request->name]);
        event(new Registered($user));
        if (!is_null($user->email_verified_at)) {
            return redirect('/owner/dashboard');
        }
        return redirect('/email/verify');
    }

    /**
     * Melakukan Proses Masuk / Login pengguna
     *
     * @return void
     */
    public function userLogin(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
            // 'remember' => 'boolean',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            $request->session()->regenerateToken();
            session(['name' => Auth::user()->name]);
            if (!is_null(Auth::user()->email_verified_at)) {
                if (Auth::user()->role === 'owner') {
                    return redirect('/owner/dashboard');
                } elseif (Auth::user()->role === 'admin') {
                    return redirect('/admin/dashboard');
                }
            }
            return redirect('/email/verify');
        }else{
            dd("Nemo");
        }
    }

    public function userLogout(Request $request)
    {
        Auth::logout();

        // Clear all session data
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Forget "remember me" cookie
        Cookie::queue(Cookie::forget(Auth::getRecallerName()));

        return redirect('/');
    }
    public function sendEmailForgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $status = Password::sendResetLink(
            $request->only('email')
        );
        return $status === Password::ResetLinkSent
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
                $user->save();
                event(new PasswordReset($user));
            }
        );
        return $status === Password::PasswordReset
            ? redirect("/login")->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
