<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';
    protected $primaryKey = 'PersonID';
    public $timestamps = false;

    protected $fillable = [
        'Name', 'DateOfBirth', 'Gender', 'Phone', 'Email', 'Address'
    ];

    public function patient()
    {
        return $this->hasOne(Patient::class, 'PersonID', 'PersonID');
    }

   
    public function doctor()
{
    return $this->hasOne(Doctor::class, 'PersonID', 'PersonID');
}
}