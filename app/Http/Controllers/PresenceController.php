<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presence;
use App\Models\Employee;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['page'] = 'Presence';
        $data['judul_page'] = 'Presence';
        $data['presence'] = Presence::all();

        return view('presences.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['page'] = 'Presence';
        $data['judul_page'] = 'Presence';
        $data['employee'] = Employee::all()->sortBy('fullname');;
        return view('presences.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'date' => 'required|date',
            'status' => 'required|string',
        ]);

        //         //Jika Berhasil
        Presence::create($validated);
        return redirect()->route('presence')->with('success', 'Presence recorded successfully.');
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
        $data['page'] = 'Presence';
        $data['judul_page'] = 'Presence';
        $data['presence'] = Presence::find($id);
        $data['employee'] = Employee::all()->sortBy('fullname');;
        return view('presences.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'employee_id' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'date' => 'required|date',
            'status' => 'required|string',
        ]);

        //         //Jika Berhasil
        Presence::where('id', $id)->update($validated);
        return redirect()->route('presence')->with('success', 'Presence update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
