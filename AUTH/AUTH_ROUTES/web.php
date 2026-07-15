<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Doctor\DashboardController as DoctorDashboardController;
use App\Http\Controllers\Patient\DashboardController as PatientDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'HomeHello')->name('home');
// Route::get('/', function () {
//     return 'HELLO CLINIC';
// });

/*
|--------------------------------------------------------------------------
| Shared authenticated routes (any role)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Generic /dashboard redirect sends the user to their role's dashboard.
    Route::get('/dashboard', function () {
        return redirect(auth()->user()->dashboardRoute());
    })->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->as('admin.')
    ->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        Route::resource('doctors', \App\Http\Controllers\Admin\DoctorController::class);
        Route::resource('patients', \App\Http\Controllers\Admin\PatientController::class);
        Route::resource('appointments', \App\Http\Controllers\Admin\AppointmentController::class);
        Route::resource('departments', \App\Http\Controllers\Admin\DepartmentController::class);
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        Route::resource('medical-records', \App\Http\Controllers\Admin\MedicalRecordController::class)
            ->only(['index', 'show']);
        Route::resource('payments', \App\Http\Controllers\Admin\PaymentController::class)
            ->only(['index', 'show']);

        Route::get('/reports/monthly', [\App\Http\Controllers\Admin\ReportController::class, 'monthly'])
            ->name('reports.monthly');
        Route::get('/settings', [\App\Http\Controllers\Admin\ClinicSettingController::class, 'edit'])
            ->name('settings.edit');
        Route::put('/settings', [\App\Http\Controllers\Admin\ClinicSettingController::class, 'update'])
            ->name('settings.update');
        Route::get('/search', [\App\Http\Controllers\Admin\SearchController::class, 'index'])
            ->name('search');
    });

/*
|--------------------------------------------------------------------------
| Doctor Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:doctor'])
    ->prefix('doctor')
    ->as('doctor.')
    ->group(function () {
        Route::get('/dashboard', [DoctorDashboardController::class, 'index'])->name('dashboard');

        Route::get('/schedule', [\App\Http\Controllers\Doctor\ScheduleController::class, 'index'])->name('schedule');
        Route::get('/patients/search', [\App\Http\Controllers\Doctor\PatientSearchController::class, 'index'])
            ->name('patients.search');
        Route::get('/patients/{person}', [\App\Http\Controllers\Doctor\PatientController::class, 'show'])
            ->name('patients.show');

        Route::resource('appointments', \App\Http\Controllers\Doctor\AppointmentController::class)
            ->only(['index', 'show', 'update']);

        Route::post('/appointments/{appointment}/medical-record', [\App\Http\Controllers\Doctor\MedicalRecordController::class, 'store'])
            ->name('medical-records.store');
        Route::post('/appointments/{appointment}/vaccination', [\App\Http\Controllers\Doctor\VaccinationController::class, 'store'])
            ->name('vaccinations.store');
        Route::post('/patients/{person}/growth-measurement', [\App\Http\Controllers\Doctor\GrowthMeasurementController::class, 'store'])
            ->name('growth-measurements.store');
        Route::post('/appointments/{appointment}/attachments', [\App\Http\Controllers\Doctor\AttachmentController::class, 'store'])
            ->name('attachments.store');
    });

/*
|--------------------------------------------------------------------------
| Patient Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:patient'])
    ->prefix('patient')
    ->as('patient.')
    ->group(function () {
        Route::get('/dashboard', [PatientDashboardController::class, 'index'])->name('dashboard');

        Route::resource('appointments', \App\Http\Controllers\Patient\AppointmentController::class)
            ->only(['index', 'create', 'store', 'show']);
        Route::patch('/appointments/{appointment}/cancel', [\App\Http\Controllers\Patient\AppointmentController::class, 'cancel'])
            ->name('appointments.cancel');
        Route::patch('/appointments/{appointment}/reschedule', [\App\Http\Controllers\Patient\AppointmentController::class, 'reschedule'])
            ->name('appointments.reschedule');

        Route::get('/prescriptions', [\App\Http\Controllers\Patient\PrescriptionController::class, 'index'])
            ->name('prescriptions.index');
        Route::get('/vaccinations', [\App\Http\Controllers\Patient\VaccinationController::class, 'index'])
            ->name('vaccinations.index');
        Route::get('/growth-charts', [\App\Http\Controllers\Patient\GrowthChartController::class, 'index'])
            ->name('growth-charts.index');
        Route::get('/medical-reports/{medicalRecord}/download', [\App\Http\Controllers\Patient\MedicalReportController::class, 'download'])
            ->name('medical-reports.download');
    });

require __DIR__ . '/auth.php';
