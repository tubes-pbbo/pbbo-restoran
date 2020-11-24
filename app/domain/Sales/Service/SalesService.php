<?php

namespace App\domain\Sales\service;

use App\domain\Sales\dao\SalesDao;
use App\Domain\Sales\Entity\Menu;
use App\Domain\Sales\Entity\MenuOrder;
use App\Domain\Sales\Entity\Payment;
use App\Domain\Sales\Entity\Table;

class SalesService{

    private $dao;

    public function __construct() {
        $this->dao = new SalesDao();
    }

    public function getAllTable() {
        return $this->dao->findAllTable();
    }

    public function getTableById($id) {
        return $this->dao->findTableById($id);
    }

    public function getOrder(){
        return $this->dao->findAllOrder();
    }

    public function updateMenuOrderStatus($id){
        $menu = MenuOrder::find($id);
        $menu->stat = 2;

        return $this->dao->updateMenuOrder($menu);
    }

    public function getMenuById($id){
        return $this->dao->findMenuById($id);

    }

    public function getAllPayment(){
        return $this->dao->findAllPayment();

    }

    public function updateMenuCashierStatus($cId, $pId){
        $payment = Payment::find($pId);
        $payment->statusPayment = 1;
        $payment->kasir = $cId;

        return $this->dao->savePaymentAndMenu($payment);
    }

    public function saveIfTable($id){
        $table = $this->dao->findTableById($id);
        if ($table->statusMeja == 0){
            $table->statusMeja = 1;
        }else{
            $table->statusMeja = 0;
        }

        return $this->dao->saveTable($table);
    }

    public function saveMenuById($id){
        $menu = MenuOrder::find($id);
        $menu->stat = 3;

        return $this->dao->updateMenuOrder($menu);
    }

    public function checkIfOrderId($id){
        $order = $this->dao->findOrderById($id);;
        foreach($order->menuorder as $menu){
            if($menu->stat == 2 or $menu->stat == 1){
                return false;
            }
        }

        $order->stat = 1;

        return $this->dao->saveOrder($order);
    }

}
