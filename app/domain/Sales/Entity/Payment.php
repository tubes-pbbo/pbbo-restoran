<?php

namespace App\Domain\Sales\Entity;

use Illuminate\Database\Eloquent\Model;
use App\Domain\HR\Entity\Employee;

class Payment extends Model
{

    protected $table = 'payments';
    protected $primaryKey = 'paymentID';

    public function employee(){
        return $this->belongsTo(Employee::class,'kasir');
    }

    public function paymentmethod(){
        return $this->belongsTo(PaymentMethod::class, 'paymenttype');
    }

    public function order(){
        return $this->belongsTo(Order::class, 'orderID');
    }
}
