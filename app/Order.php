<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function table(){
        return $this->belongsTo(Table::class);
    }
}
