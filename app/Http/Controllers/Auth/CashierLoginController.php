<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CashierLoginController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.cashier');
    }

    public function login()
    {
        Auth::guard('guardName')->check();
    }
}
