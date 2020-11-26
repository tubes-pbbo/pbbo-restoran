<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class EmployeeAuth extends Authenticatable
{
    use Notifiable;

    protected $guard='cashier';
    protected $table="employees";
    protected $primaryKey = "employeeID";

    protected $fillable = [
        'employeeID','password',
    ];

    protected $hidden = [
        'password',
    ];

}
