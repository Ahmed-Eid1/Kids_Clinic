<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Person;

class PatientController extends Controller
{
     // List all patients
    public function index()
    {
        $patients = Patient::with('person')->get();
        return view('patients.index', compact('patients'));
    }

    // Show create form
    public function create()
    {
        return view('patients.create');
    }

    // Save new patient (creates person + patients row together)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Name' => 'required|string|max:255',
            'DateOfBirth' => 'required|date',
            'Gender' => 'required|string',
            'Phone' => 'nullable|string|max:20',
            'Email' => 'nullable|email',
            'Address' => 'nullable|string',
        ]);

        // Step 1: create the person
        $person = Person::create($validated);

        // Step 2: link a patient record to that person
        Patient::create(['PersonID' => $person->PersonID]);

        return redirect()->route('patients.index')->with('success', 'Patient added successfully.');
    }

    // Show single patient
    public function show(Patient $patient)
    {
        $patient->load('person');
        return view('patients.show', compact('patient'));
    }

    // Show edit form
    public function edit(Patient $patient)
    {
        $patient->load('person');
        return view('patients.edit', compact('patient'));
    }

    // Update patient (updates the linked person row)
    public function update(Request $request, Patient $patient)
    {
        $validated = $request->validate([
            'Name' => 'required|string|max:255',
            'DateOfBirth' => 'required|date',
            'Gender' => 'required|string',
            'Phone' => 'nullable|string|max:20',
            'Email' => 'nullable|email',
            'Address' => 'nullable|string',
        ]);

        $patient->person->update($validated);

        return redirect()->route('patients.index')->with('success', 'Patient updated successfully.');
    }

    // Delete patient + linked person
    public function destroy(Patient $patient)
    {
        $person = $patient->person;
        $patient->delete();
        $person?->delete();

        return redirect()->route('patients.index')->with('success', 'Patient deleted.');
    }
}
