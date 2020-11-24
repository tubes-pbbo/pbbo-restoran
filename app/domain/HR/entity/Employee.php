<?php

namespace App\domain\HR\entity;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model implements Authenticatable
{
    use AuthenticableTrait;

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
