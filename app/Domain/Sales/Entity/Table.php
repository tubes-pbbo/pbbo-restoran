<?php

namespace App\Domain\Sales\Entity;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{

    protected $table = 'mejas';
    protected $primaryKey = 'tableId';

    public function order(){
        return $this->hasMany(Order::class,'tableID');
    }
}
