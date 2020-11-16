<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function bill(){
        return$this->hasOne(Bill::class);
    }

    public function employee(){
        return$this->hasOne(Employee::class);
    }

    public function paymentMethod(){
        return$this->belongsTo(PaymentMethod::class);
    }
}
