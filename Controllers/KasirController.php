<?php

namespace App\Http\Controllers;

class KasirController extends Controller{
    public function view(){
        return view ('Cashier/index');
    }

    public function payment(){
        return view ('Cashier/detail_bayar');
    }
}

?>