<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    public function menu(){
        $this->belongsTo(Menu::class);
    }

    public function order(){
        $this->belongsTo(Order::class);
    }
}
