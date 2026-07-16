<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;



Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->intended(auth()->user()->dashboardRoute());
    }
    return redirect()->route('login');
});

Route::get('/home', [AppointmentController::class, 'create'])->name('home');

Route::resource('patients', PatientController::class);

Route::get('/doctors', function () {
    return view('patients.doctorss');
})->name('doctors');

Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('/book', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/book', [AppointmentController::class, 'store'])->name('appointments.store');

// Role-based dashboard routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/doctor', [\App\Http\Controllers\Admin\DashboardController::class, 'storeDoctor'])->name('admin.doctor.store');
});

Route::middleware(['auth', 'role:doctor'])->group(function () {
    Route::get('/doctor/dashboard', [\App\Http\Controllers\Doctor\DashboardController::class, 'index'])->name('doctor.dashboard');
});

Route::middleware(['auth', 'role:patient'])->group(function () {
    Route::get('/patient/dashboard', [\App\Http\Controllers\Patient\DashboardController::class, 'index'])->name('patient.dashboard');
});

require __DIR__.'/auth.php';
