<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('client.home');
});

Route::get('/pencarian', function () {
    return view('client.hasil_pencarian');
});

Route::get('/detail', function () {
    return view('client.detail_kendaraan');
});

// Halaman/Fungsi yang bisa diakses jika belum masuk / login
Route::middleware('guest')->group(function () {
    // Halaman Login
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    // Halaman Register
    Route::get('/register', function () {
        return view('auth.register');
    });
    // Fungsi Proses Login
    Route::post('/login', [AuthController::class, 'userLogin']);
    //Fungsi Proses Register
    Route::post('/register', [AuthController::class, 'userRegister']);

    // Halaman Forgot Password
    Route::get('/forgot-password', function () {
        return view('auth.reset.forgot-password');
    })->name('password.request');
    // Fungsi Proses Forgot Password
    Route::post('/forgot-password', [AuthController::class, 'sendEmailForgotPassword'])->name('password.email');
    // Halaman Reset/Ganti Password
    Route::get('/reset-password/{token}', function (string $token) {
        return view('auth.reset.reset', ['token' => $token]);
    })->middleware('guest')->name('password.reset');
    // Fungsi Proses Reset Password
    Route::post('/reset-password', [AuthController::class, 'resetPassword'])->middleware('guest')->name('password.update');
});

// Halaman/Fungsi yang bisa diakses jika sudah masuk / login
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'userLogout'])->name('logout');
    // Khusus Sudah Login tapi belum verifikasi
    Route::middleware('unverified')->group(function () {
        // Fungsi Verifikasi Email Register
        Route::prefix('email')->group(function () {
            // Untuk menampilkan pemberitahuan bahwa harus mengklik link verifikasi di email yang dikirimkan Laravel setelah pendaftaran.
            Route::get('/verify', function () {
                return view('auth.verify');
            })->name('verification.notice');

            // untuk menangani permintaan saat user mengklik link verifikasi email di email.
            Route::get('/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
                $request->fulfill();
                return redirect('/');
            })->middleware(['signed'])->name('verification.verify');

            // untuk resend link verifikasi jika link verifikasi tidak dapat / hilang.
            Route::post('/verification-notification', function (Request $request) {
                $request->user()->sendEmailVerificationNotification();
                return back()->with('message', 'Verification link sent!');
            })->middleware(['throttle:4,1'])->name('verification.send');
        });
    });
    // Khusus Sudah Login dan verifikasi
    Route::middleware('verified')->group(function () {
        // Khusus role owner (Pemilik)
        Route::prefix('owner')->middleware('role:owner')->group(function () {
            Route::get('/dashboard', function () {
                return view('owner.index');
            });

            Route::get('/form-iklan', function () {
                return view('owner.form_iklan');
            });
            Route::prefix('owner')->group(function () {
            Route::get('/pricing', function () {
            return view('owner.pricing');
            })->name('owner.pricing');
            });
            Route::get('/userlist', function () {
                return view('admin.pengguna');
            });

            Route::get('/pengaturan', function () {
                return view('owner.pengaturan');
            });
        });
        // Khusus role Admin
        Route::prefix('admin')->middleware('role:admin')->group(function () {
            Route::get('/dashboard', function () {
                return view('admin.dashboard');
            });

            Route::get('/moderasi', function () {
                return view('admin.moderasi');
            });

            Route::get('/paket', function () {
                return view('admin.paket');
            });

            
            });
        });
    });

