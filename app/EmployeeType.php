<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeType extends Model
{
    public function employee(){
        $this->hasMany(Employee::class);
    }

}
