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

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['page'] = 'Payroll';
        $data['judul_page'] = 'Create Payroll';
        $data['employee'] = Employee::all()->sortBy('fullname');;
        return view('payrolls.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required',
            'salary' => 'required|numeric',
            'bonuses' => 'nullable|numeric',
            'deductions' => 'nullable|numeric',
            'net_salary' => 'nullable|numeric',
            'pay_date' => 'required|date',

        ]);

        $netSalary = $validated['salary'] + ($validated['bonuses'] ?? 0) - ($validated['deductions'] ?? 0);
        $validated['net_salary'] = $netSalary;


        //Jika Berhasil
        Payroll::create($validated);
        return redirect()->route('payroll')->with('success', 'Payroll created successfully.');
    }

}
