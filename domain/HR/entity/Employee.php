<?php

namespace App\domain\HR\entity;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table="employees";
    protected $primaryKey = "employeeID";
    public $incrementing = false;

    public function payment(){
        return $this->hasMany(Payment::class);
    }

    public function employeeTypes(){
        return $this->belongsTo(EmployeeType::class,'employeeType','employeetype');
    }
}
