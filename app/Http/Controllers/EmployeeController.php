<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Role;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        // Auth::user();
        $data['page'] = 'Employee';
        $data['judul_page'] = 'Employee';
        $data['employee'] = Employee::all();

        return view('employees.index', $data);
    }

    public function create()
    {
        $data['page'] = 'Employee';
        $data['judul_page'] = 'Create Employee';
        $data['pegawai'] = Employee::all()->sortBy('fullname');;
        return view('employees.create', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'assigned_to' => 'required',
            'due_date' => 'required|date',
            'status' => 'required|string',
        ]);

        //         //Jika Berhasil
        Employee::create($validated);
        return redirect()->route('employee')->with('success', 'Employee created successfully.');
    }

    public function edit($id)
    {
        $data['page'] = 'Employee';
        $data['judul_page'] = 'Edit Employee';
        $data['employee'] = Employee::find($id);
        $data['pegawai'] = Employee::all();
        return view('employees.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'assigned_to' => 'required',
            'due_date' => 'required|date',
            'status' => 'required|string',
        ]);

        // Jika Berhasil
        Employee::where('id', $id)->update($validated);
        return redirect()->route('employee')->with('success', 'Employee updated successfully.');
    }

 public function destroy($id)
    {
        // Jika Berhasil
        Employee::destroy($id);
        return redirect()->route('employee')->with('success', 'Employee deleted successfully.');
    }

    public function show($id)
    {
        $data['page'] = 'Employee';
        $data['judul_page'] = 'Detail Employee';
        $data['employee'] = Employee::find($id);
        return view('employees.show', $data);
    }

    public function done($id)
    {
        // Jika Berhasil
        $employee = Employee::find($id);
        $employee->update(['status' => 'done']);

        return redirect()->route('employee')->with('success', 'Employee marked as done.');
    }
    public function pending($id)
    {
        // Jika Berhasil
        $employee = Employee::find($id);
        $employee->update(['status' => 'pending']);

        return redirect()->route('employee')->with('success', 'Employee marked as pending.');
    }
}



