<?php

namespace App\Domain\HR\Entity;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employees";
    protected $primaryKey = "employeeID";

    public function payment(){
        return $this->hasMany(Payment::class);
    }

    public function employeetype(){
        return $this->belongsTo(EmployeeType::class,'employeeType');
    }
}
