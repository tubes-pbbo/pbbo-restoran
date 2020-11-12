<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function cartItem(){
        return $this->hasMany(CartItem::class);
    }
}
