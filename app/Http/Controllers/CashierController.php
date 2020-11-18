<?php

namespace App\Http\Controllers;

use App\domain\HR\service\EmployeeService;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class CashierController extends Controller{

    use AuthenticatesUsers;

    public function view(){
        return view('Cashier/login');
    }

    public function payment(){
        return view('Cashier/detail_bayar');
    }

    public function cashierHome(){
        return view('Cashier/index');
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
}

?>
