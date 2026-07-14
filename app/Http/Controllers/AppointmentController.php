<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Person;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // Show booking form
    public function create()
{
    $doctors = Doctor::with('person')->get();
    return view('welcome', compact('doctors')); // adjust view name to your actual homepage view
}

    // Handle booking submission
    public function store(Request $request)
{
    $validated = $request->validate([
        'PatientName'     => 'required|string|max:255',
        'DateOfBirth'     => 'required|date',
        'Gender'          => 'required|string',
        'Phone'           => 'required|string|max:20',
        'DoctorID'        => 'required|exists:doctors,DoctorID',
        'AppointmentDate' => 'required|date',
        'AppointmentTime' => 'required',
    ]);

    $person = Person::create([
        'Name'        => $validated['PatientName'],
        'DateOfBirth' => $validated['DateOfBirth'],
        'Gender'      => $validated['Gender'],
        'Phone'       => $validated['Phone'],
    ]);

    Patient::create(['PersonID' => $person->PersonID]);

    $dateTime = $validated['AppointmentDate'] . ' ' . $validated['AppointmentTime'];

    Appointment::create([
        'AppointmentDateTime' => $dateTime,
        'AppointmentStatus'   => 'Pending',
        'PersonID'            => $person->PersonID,
        'DoctorID'            => $validated['DoctorID'],
    ]);

    return redirect()->back()->with('success', 'Appointment booked successfully!');
}

    // List all appointments (for dashboard)
    public function index()
    {
        $appointments = Appointment::with(['person', 'doctor.person'])
            ->orderBy('AppointmentDateTime')
            ->get();

        return view('appointments.index', compact('appointments'));
    }
}