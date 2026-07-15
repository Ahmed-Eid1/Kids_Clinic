<?php

namespace App\Http\Controllers\Patient;

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
        $patient = $request->user()->patient();

        abort_if(!$patient, 403, 'No patient profile is linked to this account.');

        $stats = $this->dashboardService->patientSummary($patient->PersonID);

        return view('patient.dashboard', compact('stats', 'patient'));
    }
}
