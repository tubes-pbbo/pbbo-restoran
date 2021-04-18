<?php

namespace App\Domain\Sales\Entity;

use Illuminate\Database\Eloquent\Model;

class StatusPemesanan extends Model
{

    protected $table = 'statuspemesanans';
    protected $primaryKey = 'statusId';

    public function order(){
        return $this->hasMany(Order::class);
    }

    public function menuOrder(){
        return $this->hasMany(MenuOrder::class);
    }

}
