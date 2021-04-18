<?php

namespace App\Http\Controllers;

use App\domain\Sales\Service\SalesService;

class WaitersController extends Controller{
    public function view(){
        $svc = new SalesService();
        $tables = $svc->getAllTable();

        return view('Waiter/waiter',[
            'tables' => $tables,
        ]);

    }

    public function changeTable($id){
        $svc = new SalesService();
        $temp = $svc->saveIfTable($id);
        $tables = $svc->getAllTable();

        return view('Waiter/waiter',[
            'tables' => $tables,
        ]);

    }

    public function changeOrder($orderId,$menuId){
        $svc = new SalesService();
        $tables = $svc->getAllTable();
        $menu = $svc->saveMenuById($menuId);
        $menu = $svc->checkIfOrderId($orderId);

        return view('Waiter/waiter',[
            'tables' => $tables,
        ]);

    }
}

?>
