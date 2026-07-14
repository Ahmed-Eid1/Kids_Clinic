<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';
    protected $primaryKey = 'DoctorID';
    public $timestamps = false;

    protected $fillable = ['Specialization', 'PersonID'];

    public function person()
    {
        return $this->belongsTo(Person::class, 'PersonID', 'PersonID');
    }
}