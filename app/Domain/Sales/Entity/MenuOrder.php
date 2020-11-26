<?php

namespace App\Domain\Sales\Entity;

use Illuminate\Database\Eloquent\Model;

class MenuOrder extends Model
{
    protected $table = 'menu_order';
    protected $primaryKey = 'ID';

    public function order(){
        return $this->belongsTo(Order::class, 'order_orderID');
    }

    public function menu(){
        return $this->belongsTo(Menu::class, 'menu_menuId');
    }

    public function statusPemesanan(){
        return $this->belongsTo(statusPemesanan::class, 'stat');
    }

}
