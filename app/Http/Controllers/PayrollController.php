<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payroll;
use App\Models\Employee;

class PayrollController extends Controller
{

    public function index()
    {
        $data['page'] = 'Payroll';
        $data['judul_page'] = 'Payroll';
        $data['payroll'] = Payroll::all();

        return view('payrolls.index', $data);
    }


}
