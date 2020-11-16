<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    public function menu(){
        return $this->belongsTo(Menu::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
