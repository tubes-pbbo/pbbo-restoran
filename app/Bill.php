<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function order(){
        return $this->hasOne(Order::class);
    }

    public function bill(){
        return $this->hasOne(Payment::class);
    }
}
