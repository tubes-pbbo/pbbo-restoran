<?php

namespace App\Http\Controllers;

class CustomerController extends Controller{
    public function view(){
        return view ('Customer/home');
    }

    public function allMenu(){
        return view ('Customer/menu');
    }
}

?>