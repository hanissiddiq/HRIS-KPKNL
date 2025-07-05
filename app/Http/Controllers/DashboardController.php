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
        $data['employeeLatest'] = Employee::orderBy('hire_date', 'desc')->take(6)->get();
        $data['departementCount'] = Departement::count();
        $data['payrollCount'] = Payroll::count();
        $data['presenceCount'] = Presence::count();
        $data['task'] = Task::all();
         $data['taskLatest'] = Task::orderBy('due_date', 'desc')->take(8)->get();
        return view('dashboard.index', $data);
    }

    public function presence()
    {
        $data = Presence::where('status', 'present')            
            ->selectRaw('MONTH(date) as month,YEAR(date) as year,COUNT(*) as total_present')
            ->groupBy('year', 'month')
            ->orderBy('month', 'asc') // Order by month ascending Jan, feb, mar, etc.            
            ->get();

        $temp = [];
        $i = 0;
        foreach ($data as $item) {
            $temp[$i] = $item->total_present;
            $i++;
        }
        return response()->json($temp);
    }
}
