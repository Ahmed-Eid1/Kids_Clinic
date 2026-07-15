<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Services\DashboardService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(protected DashboardService $dashboardService)
    {
    }

    public function index(Request $request): View
    {
        $doctor = $request->user()->doctor();

        abort_if(!$doctor, 403, 'No doctor profile is linked to this account.');

        $stats = $this->dashboardService->doctorSummary($doctor->DoctorID);

        return view('doctor.dashboard', compact('stats', 'doctor'));
    }
}
