<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::resource('/employee', EmployeeController::class)->name('employee');
// ('/task', [TaskController::class, 'index'])->name('task');
// Route::resource('/task', [TaskController::class, 'index'])->name('employee');
// Route::resource('/employee', [EmployeeController::class])->name('employee');

Route::get('/task/done/{id}', [TaskController::class, 'done'])->name('task.done');
Route::get('/task/pending/{id}', [TaskController::class, 'pending'])->name('task.pending');
Route::get('/task/show/{id}', [TaskController::class, 'show'])->name('task.show');

// Handling rute untuk task

Route::get('/task', [TaskController::class, 'index'])->name('task');
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/task', [TaskController::class, 'store'])->name('task.store');
Route::delete('/task/{id}', [TaskController::class, 'destroy'])->name('task.destroy');
Route::get('/task/detail/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/task/detail/{id}', [TaskController::class, 'update'])->name('task.update');

// Handling rute untuk employee
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');
Route::get('/employee/show/{id}', [EmployeeController::class, 'show'])->name('employee.show');
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee', [EmployeeController::class, 'store'])->name('employee.store');
Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
Route::get('/employee/detail/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/detail/{id}', [EmployeeController::class, 'update'])->name('employee.update');

// Handling rute untuk departement
Route::get('/departement', [DepartementController::class, 'index'])->name('departement');
Route::get('/departement/show/{id}', [DepartementController::class, 'show'])->name('departement.show');
Route::get('/departement/create', [DepartementController::class, 'create'])->name('departement.create');
Route::post('/departement', [DepartementController::class, 'store'])->name('departement.store');
Route::delete('/departement/{id}', [DepartementController::class, 'destroy'])->name('departement.destroy');
Route::get('/departement/detail/{id}', [DepartementController::class, 'edit'])->name('departement.edit');
Route::put('/departement/detail/{id}', [DepartementController::class, 'update'])->name('departement.update');

// Handling rute untuk departement
Route::get('/role', [RoleController::class, 'index'])->name('role');
Route::get('/role/show/{id}', [RoleController::class, 'show'])->name('role.show');
Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
Route::post('/role', [RoleController::class, 'store'])->name('role.store');
Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('role.destroy');
Route::get('/role/detail/{id}', [RoleController::class, 'edit'])->name('role.edit');
Route::put('/role/detail/{id}', [RoleController::class, 'update'])->name('role.update');


// Route::get('/laundry', [LaundryController::class, 'index'])->middleware('auth');
// Route::get('/laundry/add', [LaundryController::class, 'create'])->middleware('auth');
// Route::post('/laundry', [LaundryController::class, 'store'])->middleware('auth');
// Route::get('/laundry/{id}', [LaundryController::class, 'destroy'])->middleware('auth');
// Route::get('/laundry/detail/{id}', [LaundryController::class, 'edit'])->middleware('auth');
// Route::put('/laundry/{id}', [LaundryController::class, 'update'])->middleware('auth');

// Route::get('/task', [TaskController::class, 'create'])->name('task.create');
// Route::get('/task', [TaskController::class, 'store'])->name('task.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
