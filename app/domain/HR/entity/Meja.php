<?php

namespace App\domain\HR\entity;

use Illuminate\Database\Eloquent\Model;

class EmployeeType extends Model
{

    protected $table = "mejas";
    protected $primaryKey="tableID";

    public function order(){
        return $this->hasMany(Chef::class);
    }

}
