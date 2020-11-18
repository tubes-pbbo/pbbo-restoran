<?php

namespace App\Domain\Sales\Entity;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{

    protected $table = 'bills';
    protected $primaryKey = 'billID';

    public function order(){
        return $this->belongsTo(Order::class, 'orderID');
    }

    public function bill(){
        return $this->hasOne(Payment::class);
    }
}
