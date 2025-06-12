<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         // Auth::user();
        $data['page'] = 'Departement';
        $data['judul_page'] = 'Departement';
        $data['departement'] = Departement::all();

        return view('departement.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data['page'] = 'Departement';
        $data['judul_page'] = 'Create Departement';

        return view('departement.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'description'   => 'nullable|string',
            'status'        => 'required|string',
        ]);

        //         //Jika Berhasil
        Departement::create($validated);
        return redirect()->route('departement')->with('success', 'Departement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data['page']           = 'Departement';
        $data['judul_page']     = 'Detail Departement';
        $data['departement']    = Departement::find($id);
        return view('departement.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data['page'] = 'Departement';
        $data['judul_page'] = 'Edit Departement';
        $data['departement'] = Departement::find($id);

        return view('departement.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'description'   => 'nullable|string',
            'status'        => 'required|string',
        ]);

        // Jika Berhasil
        Departement::where('id', $id)->update($validated);
        return redirect()->route('departement')->with('success', 'Departement updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
