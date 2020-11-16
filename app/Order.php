<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="orders";
    protected $primaryKey="orderID";

    public function table(){
        return $this->belongsTo(Table::class,'tableID');
    }
}
