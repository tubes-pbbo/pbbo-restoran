<?php

namespace App\Domain\Sales\Entity;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = 'orders';
    protected $primaryKey = 'orderID';

    public function table(){
        return $this->belongsTo(Table::class, 'tableID');
    }

    public function statuspemesanan(){
        return $this->belongsTo(StatusPemesanan::class, 'stat');
    }

    public function bill(){
        return $this->hasOne(Bill::class);
    }

    public function menu(){
        return $this->belongsToMany(Menu::class);
    }
}
