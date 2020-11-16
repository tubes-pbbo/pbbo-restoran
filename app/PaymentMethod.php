<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    public function payment(){
        return $this->hasMany(Payment::class);
    }
}
