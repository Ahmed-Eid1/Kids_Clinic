<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Person;
use App\Models\User;
use App\Http\Requests\Auth\RegisterPatientRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class RegisteredUserController extends Controller
{
    /**
     * Public self-registration is for PATIENTS only.
     * Admin and Doctor accounts are created by an Admin (see
     * App\Http\Controllers\Admin\UserController).
     */
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(RegisterPatientRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $user = DB::transaction(function () use ($validated) {
            // 1. Create the Person row (existing table, columns exactly as-is).
            $person = Person::create([
                'Name' => $validated['name'],
                'DateOfBirth' => $validated['date_of_birth'],
                'Gender' => $validated['gender'],
                'Phone' => $validated['phone'],
                'Email' => $validated['email'],
                'Address' => $validated['address'] ?? null,
            ]);

            // 2. Create the Patients row (existing table) linked to Person.
            Patient::create([
                'PersonID' => $person->PersonID,
            ]);

            // 3. Create the auth User row (new table) linked via person_id.
            return User::create([
                'person_id' => $person->PersonID,
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role' => User::ROLE_PATIENT,
            ]);
        });

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('patient.dashboard')
            ->with('success', 'Welcome! Your patient account has been created.');
    }
}
