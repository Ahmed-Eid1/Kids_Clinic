<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointment';
    protected $primaryKey = 'AppointmentID';
    public $timestamps = false;

    protected $fillable = [
        'AppointmentDateTime', 'AppointmentStatus', 'PersonID', 'DoctorID', 'MedicalRecordID', 'PaymentID'
    ];

    public function person()
    {
        return $this->belongsTo(Person::class, 'PersonID', 'PersonID');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'DoctorID', 'DoctorID');
    }
}