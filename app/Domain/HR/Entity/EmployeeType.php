<?php

namespace App\Domain\HR\Entity;

use Illuminate\Database\Eloquent\Model;

class EmployeeType extends Model
{
    protected $table = "employeetypes";
    protected $primaryKey = "employeetype";

    public function employee(){
        return $this->hasMany(Employee::class);
    }

}
