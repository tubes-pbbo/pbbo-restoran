<?php

namespace App\Domain\Sales\Entity;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $table = 'menus';
    protected $primaryKey = 'menuId';

    public function order(){
        return $this->belongsToMany(Order::class);
    }

    public function menuorder(){
        return $this->hasMany(MenuOrder::class,'menu_menuId');
    }
}
