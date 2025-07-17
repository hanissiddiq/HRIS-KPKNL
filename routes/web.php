<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\LeaveRequestController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {




Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard')->middleware(['role:Admin,HRD,Manager,Data Entry,Karyawan']);
Route::get('/dashboard/presence', [DashboardController::class, 'presence']);

Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/admin/setting/office-location', [SettingController::class, 'officeLocationForm'])->name('admin.setting.office-location');
    Route::post('/admin/setting/office-location', [SettingController::class, 'updateOfficeLocation'])->name('admin.setting.office-location.update');
});

Route::get('/task/done/{id}', [TaskController::class, 'done'])->name('task.done');
Route::get('/task/pending/{id}', [TaskController::class, 'pending'])->name('task.pending');
Route::get('/task/show/{id}', [TaskController::class, 'show'])->name('task.show');

// Handling rute untuk task

Route::get('/task', [TaskController::class, 'index'])->name('task')->middleware(['role:Admin,HRD,Manager,Data Entry,Karyawan']);
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/task', [TaskController::class, 'store'])->name('task.store');
Route::delete('/task/{id}', [TaskController::class, 'destroy'])->name('task.destroy');
Route::get('/task/detail/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/task/detail/{id}', [TaskController::class, 'update'])->name('task.update');

// Handling rute untuk employee
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee')->middleware(['role:Admin,HRD,Manager']);
Route::get('/employee/show/{id}', [EmployeeController::class, 'show'])->name('employee.show');
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee', [EmployeeController::class, 'store'])->name('employee.store');
Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
Route::get('/employee/detail/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/detail/{id}', [EmployeeController::class, 'update'])->name('employee.update');

// Handling rute untuk departement
Route::get('/departement', [DepartementController::class, 'index'])->name('departement')->middleware(['role:Admin,HRD,Manager']);
Route::get('/departement/show/{id}', [DepartementController::class, 'show'])->name('departement.show');
Route::get('/departement/create', [DepartementController::class, 'create'])->name('departement.create');
Route::post('/departement', [DepartementController::class, 'store'])->name('departement.store');
Route::delete('/departement/{id}', [DepartementController::class, 'destroy'])->name('departement.destroy');
Route::get('/departement/detail/{id}', [DepartementController::class, 'edit'])->name('departement.edit');
Route::put('/departement/detail/{id}', [DepartementController::class, 'update'])->name('departement.update');

// Handling rute untuk departement
Route::get('/role', [RoleController::class, 'index'])->name('role')->middleware(['role:Admin,HRD,Manager']);
Route::get('/role/show/{id}', [RoleController::class, 'show'])->name('role.show');
Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
Route::post('/role', [RoleController::class, 'store'])->name('role.store');
Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('role.destroy');
Route::get('/role/detail/{id}', [RoleController::class, 'edit'])->name('role.edit');
Route::put('/role/detail/{id}', [RoleController::class, 'update'])->name('role.update');

// Handling rute untuk presence
Route::get('/presence', [PresenceController::class, 'index'])->name('presence')->middleware(['role:Admin,HRD,Manager,Data Entry,Karyawan']);
Route::get('/presence/show/{id}', [PresenceController::class, 'show'])->name('presence.show');
Route::get('/presence/create', [PresenceController::class, 'create'])->name('presence.create');
Route::post('/presence', [PresenceController::class, 'store'])->name('presence.store');
Route::delete('/presence/{id}', [PresenceController::class, 'destroy'])->name('presence.destroy');
Route::get('/presence/detail/{id}', [PresenceController::class, 'edit'])->name('presence.edit');
Route::put('/presence/detail/{id}', [PresenceController::class, 'update'])->name('presence.update');

// Handling rute untuk presence
Route::get('/payroll', [PayrollController::class, 'index'])->name('payroll')->middleware(['role:Admin,HRD,Manager,Data Entry,Karyawan']);
Route::get('/payroll/show/{id}', [PayrollController::class, 'show'])->name('payroll.show');
Route::get('/payroll/create', [PayrollController::class, 'create'])->name('payroll.create');
Route::post('/payroll', [PayrollController::class, 'store'])->name('payroll.store');
Route::delete('/payroll/{id}', [PayrollController::class, 'destroy'])->name('payroll.destroy');
Route::get('/payroll/detail/{id}', [PayrollController::class, 'edit'])->name('payroll.edit');
Route::put('/payroll/detail/{id}', [PayrollController::class, 'update'])->name('payroll.update');

//Cetak PDF via LaravelDomPDF
// Route::get('/slip-gaji/cetak', [PayrollController::class, 'cetakPDF'])->name('payroll.cetakPDF');
Route::get('/payrolls/{id}/cetak-pdf', [PayrollController::class, 'cetakPDF'])->name('payroll.cetakPDF');

// Handling rute untuk presence
Route::get('/leave-request', [LeaveRequestController::class, 'index'])->name('leave-request')->middleware(['role:Admin,HRD,Manager,Data Entry,Karyawan']);
Route::get('/leave-request/show/{id}', [LeaveRequestController::class, 'show'])->name('leave-request.show');
Route::get('/leave-request/create', [LeaveRequestController::class, 'create'])->name('leave-request.create');
Route::post('/leave-request', [LeaveRequestController::class, 'store'])->name('leave-request.store');
Route::delete('/leave-request/{id}', [LeaveRequestController::class, 'destroy'])->name('leave-request.destroy');
Route::get('/leave-request/detail/{id}', [LeaveRequestController::class, 'edit'])->name('leave-request.edit');
Route::put('/leave-request/detail/{id}', [LeaveRequestController::class, 'update'])->name('leave-request.update');
Route::get('/leave-request/confirm/{id}', [LeaveRequestController::class, 'confirm'])->name('leave-request.confirm')->middleware(['role:Admin,HRD,Manager']);
Route::get('/leave-request/reject/{id}', [LeaveRequestController::class, 'reject'])->name('leave-request.reject')->middleware(['role:Admin,HRD,Manager']);

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

