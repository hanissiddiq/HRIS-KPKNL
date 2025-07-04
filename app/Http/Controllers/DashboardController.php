<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;
use App\Models\Departement;
use App\Models\Payroll;
use App\Models\Presence;
use App\Models\Task;

class DashboardController extends Controller
{
    //

    public function index()
    {
        Auth::user();

        $data['page'] = 'Dashboard';
        $data['judul_page'] = 'Dashboard';

        $data['employeeCount'] = Employee::count();
        $data['employeeLatest'] = Employee::orderBy('hire_date', 'desc')->take(3)->get();
        $data['departementCount'] = Departement::count();
        $data['payrollCount'] = Payroll::count();
        $data['presenceCount'] = Presence::count();
        $data['task'] = Task::all();
        return view('dashboard.index', $data);
    }
}
