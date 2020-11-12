<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function payment(){
        $this->hasMany(Payment::class);
    }

    public function employeeType(){
        $this->belongsTo(EmployeeType::class);
    }
}
