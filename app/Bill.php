<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function order(){
        $this->hasOne(Order::class);
    }

    public function bill(){
        $this->hasOne(Payment::class);
    }
}
