<?php

namespace App\domain\HR\entity;

use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    protected $table="cartitems";

    public $incrementing = false;

    public function Meja(){
        return $this->belongsTo(Meja::class);
    }
}
