<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/companies', [CompanyController::class, 'index']);
Route::get('/companies/create', [CompanyController::class, 'create']);
Route::post('/companies', [CompanyController::class, 'store']);
Route::get('/companies/{company}/edit', [CompanyController::class, 'edit'])->name('companies.edit');
Route::put('/companies/{company}', [CompanyController::class, 'update']);
Route::get('/companies/delete/{id}', [CompanyController::class, 'destroy'])->name('companies.delete');



Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employees/create', [EmployeeController::class, 'create']);
Route::post('/employees', [EmployeeController::class, 'store']);
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{employee}', [EmployeeController::class, 'update']);
Route::get('/employees/delete/{id}', [EmployeeController::class, 'destroy'])->name('employees.delete');
