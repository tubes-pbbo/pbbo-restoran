<?php

namespace App\Domain\Sales\Entity;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = 'orders';
    protected $primaryKey = 'orderID';
    public $incrementing = false;

    public function table(){
        return $this->belongsTo(Table::class, 'tableID');
    }

    public function menu(){
        return $this->belongsToMany(Menu::class);
    }

    public function menuorder(){
        return $this->hasMany(MenuOrder::class);
    }

    public function payment(){
        return $this->hasOne(Payment::class, 'orderID');
    }
}
