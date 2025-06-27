<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\LeaveRequest;

class LeaveRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['page'] = 'Leave Requests';
        $data['judul_page'] = 'Leave Requests';

        if(session('role') == 'Admin' || session('role') == 'HRD' || session('role') == 'Manager') {
        $data['leave'] = LeaveRequest::all(); }
        else {
            $data['leave'] = LeaveRequest::where('employee_id', session('employee_id'))->get();
        }

        return view('leaves.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['page'] = 'Leave Requests';
        $data['judul_page'] = 'Create Leave Request';
        $data['employee'] = Employee::all()->sortBy('fullname');

        return view('leaves.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(session('role') == 'Admin' || session('role') == 'HRD' || session('role') == 'Manager')
        {
        $validated = $request->validate([
            'employee_id' => 'required',
            'leave_type' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required|string',
        ]);
        }
    else
        {
         // Validasi field input, kecuali status dan employee_id (akan ditambahkan manual)
         $validated = $request->validate([
            'leave_type' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Tambahkan nilai field manual
        $validated['employee_id'] = session('employee_id');
        $validated['status'] = 'pending';
        }

        //         //Jika Berhasil
        LeaveRequest::create($validated);
        return redirect()->route('leave-request')->with('success', 'Leave created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['page'] = 'Leave Requests';
        $data['judul_page'] = 'Edit Leave Request';
        $data['leave'] = LeaveRequest::find($id);
        $data['employee'] = Employee::all()->sortBy('fullname');
        return view('leaves.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'employee_id' => 'required',
            'leave_type' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required|string',
        ]);

        //         //Jika Berhasil
        LeaveRequest::where('id', $id)->update($validated);
        return redirect()->route('leave-request')->with('success', 'Leave updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        LeaveRequest::destroy($id);
        return redirect()->route('leave-request')->with('success', 'Leave deleted successfully.');
    }

    public function confirm(int $id) {
        $leaveRequest = LeaveRequest::findOrFail($id);
        $leaveRequest->update(['status' => 'approved']);
        return redirect()->route('leave-request')->with('success', 'Leave request approved successfully.');
    }
    public function reject(int $id) {
        $leaveRequest = LeaveRequest::findOrFail($id);
        $leaveRequest->update(['status' => 'rejected']);
        return redirect()->route('leave-request')->with('success', 'Leave request rejected successfully.');
    }
}
