<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function bill(){
        $this->hasOne(Bill::class);
    }

    public function employee(){
        $this->hasOne(Employee::class);
    }

    public function paymentMethod(){
        $this->belongsTo(PaymentMethod::class);
    }
}
