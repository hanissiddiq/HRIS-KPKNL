<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function index()
    {
        Auth::user();

        $data['page'] = 'Dashboard';
        $data['judul_page'] = 'Dashboard';
        return view('dashboard.index', $data);
    }
}
