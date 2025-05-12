<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Employee;

// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\Crypt;
// use Illuminate\Support\Facades\File;

class TaskController extends Controller
{
    //

    public function index()
    {
        // Auth::user();
        $data['page'] = 'Task';
        $data['judul_page'] = 'Task';
        $data['task'] = Task::all();
        $data['pegawai'] = Employee::all();
        return view('tasks.index', $data);
    }

    public function create()
    {
        $data['page'] = 'Task';
        $data['judul_page'] = 'Create Task';
        $data['pegawai'] = Employee::all()->sortBy('fullname');;
        return view('tasks.create', $data);
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
        Task::create($validated);
        return redirect()->route('task')->with('success', 'Task created successfully.');
    }

    public function edit($id)
    {
        $data['page'] = 'Task';
        $data['judul_page'] = 'Edit Task';
        $data['task'] = Task::find($id);
        $data['pegawai'] = Employee::all();
        return view('tasks.edit', $data);
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
        Task::where('id', $id)->update($validated);
        return redirect()->route('task')->with('success', 'Task updated successfully.');
    }

 public function destroy($id)
    {
        // Jika Berhasil
        Task::destroy($id);
        return redirect()->route('task')->with('success', 'Task deleted successfully.');
    }

    public function show($id)
    {
        $data['page'] = 'Task';
        $data['judul_page'] = 'Detail Task';
        $data['task'] = Task::find($id);
        return view('tasks.show', $data);
    }

    public function done($id)
    {
        // Jika Berhasil
        $task = Task::find($id);
        $task->update(['status' => 'done']);

        return redirect()->route('task')->with('success', 'Task marked as done.');
    }
    public function pending($id)
    {
        // Jika Berhasil
        $task = Task::find($id);
        $task->update(['status' => 'pending']);

        return redirect()->route('task')->with('success', 'Task marked as pending.');
    }
}
