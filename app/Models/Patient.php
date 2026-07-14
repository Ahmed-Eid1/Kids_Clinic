<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    protected $primaryKey = 'PatientID';
    public $timestamps = false;

    protected $fillable = ['PersonID'];

    public function person()
    {
        return $this->belongsTo(Person::class, 'PersonID', 'PersonID');
    }
}