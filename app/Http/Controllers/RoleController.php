<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['page'] = 'Role';
        $data['judul_page'] = 'Role';
        $data['role'] = Role::all();

        return view('roles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['page'] = 'Role';
        $data['judul_page'] = 'Create Role';

        return view('roles.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            ]);

        //         //Jika Berhasil
        Role::create($validated);
        return redirect()->route('role')->with('success', 'Role created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['page'] = 'Role';
        $data['judul_page'] = 'Detail Role';
        $data['role'] = Role::find($id);
        return view('roles.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $data['page'] = 'Role';
        $data['judul_page'] = 'Edit Role';
        $data['role'] = Role::find($id);

        return view('roles.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Jika Berhasil
        Role::where('id', $id)->update($validated);
        return redirect()->route('role')->with('success', 'Role updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
