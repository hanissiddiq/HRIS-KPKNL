<?php

namespace App\Http\Controllers;
use App\Models\Setting;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function officeLocationForm()
    {
        $data['page'] = 'Setting';
        $data['judul_page'] = 'Setting';
        $data['setting'] = Setting::first(); // asumsi 1 row
        return view('admin.setting.office_location', $data);
    }

    //public function updateOfficeLocation(Request $request)
    public function updateOfficeLocation(Request $request)
    {
        $request->validate([
            'nama_kantor' => 'string|max:255',
            'office_latitude' => 'required|numeric',
            'office_longitude' => 'required|numeric',
        ]);

        $setting = Setting::first(); // Atau pakai config multi row jika ada
        $setting->nama_kantor = $request->nama_kantor;
        $setting->office_latitude = $request->office_latitude;
        $setting->office_longitude = $request->office_longitude;
        $setting->save();

        return back()->with('success', 'Lokasi kantor berhasil diperbarui.');
    }
}
