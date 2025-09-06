<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use App\Models\UserPlan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
{
    // public function ownerTampilPaket()
    // {
    //     // $modDatas = Vehicle::where('mod_status', 'waiting')->orderBy('is_premium', 'DESC');
    //     // return view('admin.moderasi', compact('modDatas'));
    // }
    public function ownerAturPaket(Request $request)
    {
        $request->validate(
            [
                'plan_id' => 'required|string',
            ]
        );
        $startDate = Carbon::now();
        $endDate = null;
        $planData = Plan::where('id', $request->plan_id)->first();
        if ($planData && $planData->duration_days !== null) {
            $endDate = $startDate->copy()->addDays($planData->duration_days);
        }
        UserPlan::create([
            'user_id' => Auth::user()->id,
            'plan_id' => $request->plan_id,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'status' => "active",
        ]);
        $plan = DB::table('plans')
            ->join('user_plans', 'user_plans.plan_id', '=', 'plans.id')
            ->where('user_plans.user_id', Auth::user()->id)
            ->select('plans.name')->first();
        session(['plan' => $plan]);
        return redirect('/owner/dashboard')->with(['status' => 'Persiapan Periklanan Sudah Siap']);
    }

    public function ownerTampilProfil()
    {
        $userData = User::where('id', Auth::user()->id)->first();
        return view('owner.pengaturan', compact('userData'));
    }

    public function ownerAturProfil(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'phone' => 'nullable|string|max:20',

            ],
            [
                'name.required' => 'Nama wajib diisi.',
                'name.string'   => 'Nama harus berupa teks.',
                'phone.string' => 'Nomor telepon harus berupa angka.',
                'phone.max'    => 'Nomor telepon maksimal 20 karakter.',
            ]
        );
        $userData = User::findOrFail(Auth::user()->id);
        $userData->name = $request->name;
        $userData->phone = $request->phone;
        $userData->save();
        return redirect('/owner/pengaturan')->with(['status' => 'Data Profil Berhasil Diperbarui']);
    }

    public function ownerAturPass(Request $request)
    {
        $request->validate(
            [
                'password' => 'required|string|min:8|confirmed',
            ],
            [
                'password.required'  => 'Kata sandi wajib diisi.',
                'password.min'       => 'Kata sandi minimal 8 karakter.',
                'password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
            ]
        );
        $userData = User::findOrFail(Auth::user()->id);
        $userData->password = Hash::make($request->password);
        $userData->save();
        return redirect('/owner/pengaturan')->with(['status' => 'Password Pengguna Berhasil Diperbarui']);
    }
}
