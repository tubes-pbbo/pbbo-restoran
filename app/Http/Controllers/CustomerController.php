<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Sales\Entity\Table;
use App\Domain\Sales\Entity\Order;
use App\Domain\Sales\Entity\Menu;
use App\Domain\Sales\Entity\MenuOrder;
use App\Domain\Sales\Entity\Payment;

use App\domain\Sales\Service\SalesService;

class CustomerController extends Controller
{
    public $api = 'e5f12dc920b24dfd9f3dee909c56ece0';

    public function cust()
    {
        $svc = new SalesService();
        $tables = $svc->getAllTable();

        return view('Customer/table',[
            'tables' => $tables,
        ]);

    }

    public function createOrder($meja)
    {
        $svc = new SalesService();
        $table = $svc->saveTableCust($meja);
        $order = $svc->saveOrderCust($meja);

        return redirect("Home/$order");
    }

    public function home($order)
    {
        $url1 = 'https://api.spoonacular.com/recipes/complexSearch?number=4&apiKey='.$this->api;
        $url2 = 'https://api.spoonacular.com/recipes/complexSearch?offset=8&number=4&apiKey='.$this->api;
        $json1 = file_get_contents($url1);
        $json2 = file_get_contents($url2);
        $array1 = json_decode($json1, true);
        $array2 = json_decode($json2, true);
        $svc = new SalesService();
        $menus = $svc->getAllMenu();
        $orders = $svc->getOrderById($order);
        return view('Customer.home',[
            'array1' => $array1['results'],
            'array2' => $array2['results'],
            'menus' => $menus,
            'order' => $orders,
            'query' => 'home',
        ]);
    }

    public function menu($order, $id)
    {
        if($id=="Menu"){
            $url = 'https://api.spoonacular.com/recipes/complexSearch?offset=8&number=16&apiKey='.$this->api;
        }else{
            $url = "https://api.spoonacular.com/recipes/complexSearch?query=".rawurlencode($id)."&number=16&apiKey=".$this->api;
        }
        $svc = new SalesService();
        $json = file_get_contents($url);
        $array = json_decode($json, true);
        $orders = $svc->getOrderById($order);
        $menus = $svc->getAllMenu();

        return view('Customer.menu', [
            'menus' => $array['results'],
            'prices' => $menus,
            'query' => $id,
            'order' => $orders,
        ]);
    }

    public function addItem($order, $back, $cart)
    {
        if($back == 'home'){
            $urlback = "/Home/$order";
        }else{
            $urlback = "/Menu/$order/$back";
        }
        $svc = new SalesService();
        $menus = $svc->getOrderById($order);
        $total = 0;
        $cek = 0;
        foreach($menus->menuorder as $menu){
            if($menu->menu_menuId == $cart){
                $cek = $menu->ID;
                $total = $menu->qty;
                $total++;
            }
        }
        if($total == 0){
            $update = $svc->saveMenuOrder($order, $cart);
        }else{
            $update = $svc->updateQty($cek, $total);
        }
        return redirect($urlback);
    }

    public function cartItem($order, $back)
    {
        $svc = new SalesService();
        $orders = $svc->getOrderById($order);
        if($back == 'home'){
            $urlback = "/Home/$order";
        }else if($back == 'bill'){
            $urlback = 'bill';
        }else{
            $urlback = "/Menu/$order/$back";
        }
        return view('Customer.cartitem', [
            'order' => $orders,
            'query' => $back,
            'urlback' => $urlback,
        ]);
    }

    public function addQuantity($order, $back, $id, $qty)
    {
        if($qty == 0){
            return redirect("/Cart/$order/$back/$id");
        }else{
            $svc = new SalesService();
            $update = $svc->updateQty($id, $qty);
            return redirect("/Cart/$order/$back");
        }
    }

    public function deleteQuantity($order, $back, $id)
    {
        $svc = new SalesService();
        $update = $svc->deleteQty($id);
        return redirect("/Cart/$order/$back");
    }

    public function updateAmount($order, $total, $back)
    {
        $svc = new SalesService();
        $orders = $svc->updateAmount($order, $total);
        return redirect("Bill/$order/$back");
    }

    public function bill($order, $back)
    {
        $svc = new SalesService();
        $orders = $svc->getOrderById($order);
        return view('Customer.bill', [
            'order' => $orders,
            'query' => $back,
        ]);
    }

    public function payment($order, $method)
    {
        $svc = new SalesService();
        $orders = $svc->getOrderById($order);
        $noPayment = $orders->table->tableId;
        $noPayment = $noPayment.$order;
        $payments = $svc->getPaymentById($noPayment);
        if($payments == null){
            $create = $svc->savepayment($noPayment, $method, $order);

        }else{
            $payments = $svc->updatePayment($noPayment, $method);
        }
        $payments = $svc->getPaymentById($noPayment);
        if($payments->statusPayment == 0){
            return view('Customer.payment', [
                'order' => $orders,
                'method' => $method,
            ]);
        }else{
            $orders = $svc->getOrderById($order);
            foreach($orders->menuorder as $item){
                if($item->stat == NULL){
                    $update = $svc->updateStatusOrder($item->ID);
                }
            }
            $meja = $orders->table->tableId;
            return redirect("Order/$meja");
        }
    }

    public function viewOrder($meja)
    {
        $svc = new SalesService();
        $mejas = $svc->getTableById($meja);
        $orders = $svc->getOrderByTableAndStatus($meja);
        return view('Customer.order',[
            'meja' => $mejas,
            'orders' => $orders,
        ]);
    }
}
