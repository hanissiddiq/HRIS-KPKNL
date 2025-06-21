<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payroll;
use App\Models\Employee;
use Barryvdh\DomPDF\Facade\Pdf;

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
        $data['employee'] = Employee::all()->sortBy('fullname');
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

    public function edit(string $id)
    {
        $data['page'] = 'Payroll';
        $data['judul_page'] = 'Edit Payroll';
        $data['payroll'] = Payroll::find($id);
        $data['employee'] = Employee::all()->sortBy('fullname');
        return view('payrolls.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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

        //         //Jika Berhasil
        Payroll::where('id', $id)->update($validated);
        return redirect()->route('payroll')->with('success', 'Payroll update successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['page'] = 'Payroll';
        $data['judul_page'] = 'Detail Payroll';
        $data['employee'] = Employee::all();
        $data['payroll'] = Payroll::find($id);
        return view('payrolls.show', $data);
    }

    public function destroy(string $id)
    {
        Payroll::destroy($id);
        return redirect()->route('payroll')->with('success', 'Payroll deleted successfully.');
    }


//cetak pdf
    public function cetakPDF($id)
    {
         $payroll = Payroll::with('employee')->findOrFail($id);
        $data = [
        'nama' => $payroll->employee->fullname,
        'bulan' => \Carbon\Carbon::parse($payroll->pay_date)->translatedFormat('d F Y'),
        'gaji_pokok' => $payroll->salary,
        // 'tunjangan_transport' => $payroll->transport_allowance,
        // 'tunjangan_makan' => $payroll->meal_allowance,
        'bonus' => $payroll->bonuses,
        'potongan' => $payroll->deductions,
        'total_gaji' => $payroll->net_salary,
        'departemen' => $payroll->employee->departement->name ?? 'N/A',
        'jabatan' => $payroll->employee->role->title ?? 'N/A',
        // tambahkan field lainnya sesuai kebutuhan
    ];

        $pdf = Pdf::loadView('payrolls.slip-gaji', $data)->setPaper('a4', 'portrait');
        // return $pdf->download('slip-gaji.pdf'); // atau ->download() untuk langsung download
        return $pdf->stream('slip-gaji.pdf'); // atau ->stream() untuk lihat di browser
    }
}
