<?php

namespace App\Domain\Sales\Entity;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{

    protected $table = "paymentmethods";
    protected $primaryKey = "paymentType";

    public function payment(){
        return $this->hasMany(Payment::class);
    }
}
