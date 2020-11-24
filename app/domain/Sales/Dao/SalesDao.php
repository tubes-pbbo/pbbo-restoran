<?php

namespace App\domain\Sales\Dao;

use App\Domain\Sales\Entity\Menu;
use App\domain\Sales\entity\Table;
use App\domain\Sales\entity\Order;
use App\domain\Sales\entity\MenuOrder;
use App\Domain\Sales\Entity\Payment;

/**
 * Author : Ferani
 *
 *
 */

class SalesDao
{
    public function findAllTable()
    {
        return Table::all();
    }

    public function findTableOrderById($id){
        return Table::find($id);
    }

    public function findAllOrder(){
        return Order::all();
    }

    public function updateMenuOrder(MenuOrder $menu){
        return $menu->save();
    }

    public function findMenuById($id){
        return Menu::find($id);
    }

    public function findAllPayment(){
        return Payment::all();
    }

    public function savePaymentAndMenu(Payment $payment){
        foreach ($payment->order->menuorder as $menu){
            $menu->stat = 1;
            $menu->save();
        }

        return $payment->save();

    }


}
