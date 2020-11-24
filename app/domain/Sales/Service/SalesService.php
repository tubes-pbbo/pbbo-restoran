<?php

namespace App\domain\Sales\service;

use App\domain\Sales\dao\SalesDao;
use App\Domain\Sales\Entity\MenuOrder;
use App\Domain\Sales\Entity\Payment;

class SalesService{

    private $dao;

    public function __construct() {
        $this->dao = new SalesDao();
    }

    public function getAllTable() {
        return $this->dao->findAllTable();
    }

    public function getTableById($id) {
        return $this->dao->findTableOrderById($id);
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

}
