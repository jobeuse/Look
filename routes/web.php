<?php

use Illuminate\Support\Facades\Route; 

use App\Http\Controllers\profile\profileController;

use App\Http\Controllers\Webapp\PaymentsController;
use App\Http\Controllers\Webapp\EmployeeController;
use App\Http\Controllers\Webapp\SalesController;

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
})->name('home');

Route::get('/services', function () {
    return view('Services');
})->name('services');

Route::get('/home', function () {
    return view('welcome');
});

// Route::group(['middleware' => ['auth','admin']], function () {
//     Route::get('/Profile', App::class)->middleware('auth')->name('profile');;

// });
 

 Route::group(['middleware' => ['auth']], function () {
     Route::get('/Profile', [profileController::class,'index'])->name('profile');
    Route::get('/payments',[PaymentsController::class, 'index'])->name('payments');

    //employees
     Route::get('/employees',[EmployeeController::class, 'index'])->name('employees');
     Route::POST('/employees/store',[EmployeeController::class, 'store'])->name('employees.store');
     Route::POST('/employees/destroy/{employee}',[EmployeeController::class, 'destroy'])->name('employees.destroy');
     Route::get('/employee/{employee}',[EmployeeController::class, 'edit'])->name('employees.edit'); 
     Route::POST('/employees/update/{employee}',[EmployeeController::class, 'update'])->name('employees.update');

    //sales

      Route::get('/sales',[SalesController::class, 'index'])->name('sales');
     Route::POST('/sales/store',[SalesController::class, 'store'])->name('sales.store');
     Route::POST('/sales/destroy/{sales}',[SalesController::class, 'destroy'])->name('sales.destroy');
     Route::get('/sales/{employee}',[SalesController::class, 'edit'])->name('sales.edit'); 
     Route::POST('/sales/update/{sales}',[SalesController::class, 'update'])->name('sales.update');

 });



