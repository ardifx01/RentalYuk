<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use App\Models\UserPlan;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminTampilModerasi()
    {
        $modDatas = Vehicle::where('mod_status', 'waiting')->orderBy('is_premium', 'DESC');
        return view('admin.moderasi', compact('modDatas'));
    }
    public function adminAturModerasi()
    {
        
    }
    public function adminTampilPaket()
    {
        $paketDatas = Plan::all()->sortBy('price');
        return view('admin.paket', compact('paketDatas'));
    }
    public function adminAturPaket(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'price' => 'nullable|string',
            'quota_ads' => 'required|string|max:2',
            'duration_days' => 'nullable|string|max:2',
        ]);
        Plan::create([
            'name' => $request->name,
            'price' => $request->price ?? null,
            'quota_ads' => $request->quota_ads,
            'duration_days' => $request->duration_days ?? null,
        ]);
        return redirect('/admin/paket')->with(['status' => "Paket Berhasil Ditambahkan"]);
    }
    public function adminTampilPengguna()
    {
        $userDatas = User::all()->orderBy('role', 'ASC');
        return view('admin.pengguna', compact('userDatas'));
    }
}
