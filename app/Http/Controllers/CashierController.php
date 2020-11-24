<?php

namespace App\Http\Controllers;

use App\domain\HR\service\EmployeeService;
use App\Domain\Sales\Entity\Menuorder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\domain\Sales\Service\SalesService;
use Illuminate\Support\Facades\Auth;

class CashierController extends Controller{

    public function view(){
        return view('Cashier/login');
    }

    public function payment(){
        return view('Cashier/detail_bayar');
    }

    public function cashierHome(){
        $svc = new SalesService();
        $tables = $svc->getAllTable();

        return view('Cashier/index',[
            'tables' => $tables,
        ]);
    }

    public function cashierTable($id){
        $svc = new SalesService();
        $table = $svc->getTableById($id);
        $payments = $svc->getAllPayment();
        $orderTable = null;

        foreach ($payments as $p){
            $orderTable = $p->order->where('tableId','=',$id)->get();
        }

        if ($table->statusMeja == 1){

            return view('cashier/detail_bayar',[
                'table' => $table,
                'orders' => $orderTable,
            ]);
        }


    }


    public function login(Request $req){
        $validator = Validator::make($req->all(), [
            'id' => 'required',
            'password' => 'required',
        ]);

        $svc = new EmployeeService();
        $result = $svc->cashierLogin($req);

        if($result == true){
            return redirect('/CashierHome');
        }else{
            return redirect('/Cashier');
        }

    }

    public function cashierPayment($tableId,$cashierId , $paymentId){
        $svc = new SalesService();
        $temp = $svc->updateMenuCashierStatus($cashierId, $paymentId);

        return redirect()->route('cashierTable',[$tableId]);
    }

    public function history(){
        $svc = new SalesService();
        $orders = $svc->getOrder();

        return view('Cashier/history',[
            'orders' => $orders,
        ]);
    }

    public function orderDetail($id){
        $svc = new SalesService();
        $order = $svc->getOrderById($id);

        return view('Cashier/orderDetail',[
            'order' => $order,
        ]);
    }

    public function logout(){
        Auth::logout();

        return redirect('Cashier');
    }

    public function notCashier(){

        return view('Cashier/not_cashier');
    }


}

?>
