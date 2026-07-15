<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('patients', PatientController::class);

Route::get('/doctors', function () {
    return view('patients.doctorss');
})->name('doctors');

Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('/book', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/book', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/', [AppointmentController::class, 'create'])->name('appointments.create'); 
