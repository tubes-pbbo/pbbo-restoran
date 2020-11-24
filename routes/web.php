<?php

use Illuminate\Support\Facades\Route;
use App\Domain\Sales\Entity\Menu;
use App\Domain\Sales\Entity\Table;
use App\Domain\Sales\Entity\Order;
use App\Domain\Sales\Entity\MenuOrder;
use App\Domain\Sales\Entity\Payment;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route pertama kali ke home
Route::get('/','HomeController@home');

// Route HR
Route::get('/HR','HRController@getEmployee');
Route::get('/editEmployee/{id}','HRController@getEmployeeById');
Route::put('/editEmployee/{id}/edit','HRController@updateEmployee');
Route::get('/createEmployee/create', 'HRController@getEmployeeType');
Route::post('/createEmployee', 'HRController@postEmployee');
Route::delete('/deleteEmployee/{id}', 'HRController@deleteEmployee');



// Route Cust
Route::get('/da', function () {
    $api = 'e5f12dc920b24dfd9f3dee909c56ece0';
    $url1 = 'https://api.spoonacular.com/recipes/complexSearch?number=4&apiKey='.$api;
    $url2 = 'https://api.spoonacular.com/recipes/complexSearch?offset=4&number=4&apiKey='.$api;
    $json1 = file_get_contents($url1);
    $json2 = file_get_contents($url2);
    $array1 = json_decode($json1, true);
    $array2 = json_decode($json2, true);
    $menus = Menu::get();

    return view('home',[
        'array1' => $array1['results'],
        'array2' => $array2['results'],
        'menus' => $menus,
    ]);

});

 // Route Kasir
Route::get('/Cashier', 'CashierController@view');
Route::post('/CashierLogin', 'CashierController@login')->name('login');
Route::group(['middleware'=>'cashier'],function(){
    Route::get('/CashierHome','CashierController@cashierHome');
    Route::get('/Cashier/{id}','CashierController@cashierTable')->name('cashierTable');
    Route::get('/CashierPayment/{tableId}/{cashierId}/{PaymentId}','CashierController@cashierPayment');
    Route::get('/Cashier/Payment/{tableName}','CashierController@payment');
});


// Route Chef
Route::get('/Chef','ChefController@view');
Route::get('/Chef/{id}','ChefController@updateMenu');
Route::get('/ChefRecipe/{id}','ChefController@showRecipe');


// Route Waiters
Route::get('/Waiters','WaitersController@view');
Route::get('/WaitersTable/{id}','WaitersController@changeTable');
Route::get('/WaitersOrder/{orderId}/{menuId}','WaitersController@changeOrder');


//punya si frans
Route::get('/{meja}', function ($meja) {

    $mytime = \Carbon\Carbon::now();
    $table = Table::find($meja);
    $table->statusMeja = 1;
    $table->save();

    return redirect('Home/'.$meja.'/'.$mytime->format('dmYHis'));
});

Route::get('/Home/{meja}/{order}', function ($meja, $order){
    $api = 'e5f12dc920b24dfd9f3dee909c56ece0';
    $url1 = 'https://api.spoonacular.com/recipes/complexSearch?number=4&apiKey='.$api;
    $url2 = 'https://api.spoonacular.com/recipes/complexSearch?offset=8&number=4&apiKey='.$api;
    $json1 = file_get_contents($url1);
    $json2 = file_get_contents($url2);
    $array1 = json_decode($json1, true);
    $array2 = json_decode($json2, true);
    $menus = Menu::get();
    $mejas = Table::find($meja);

    $mytime = \Carbon\Carbon::now();
    $orders = Order::find($order);
    if($orders == null){
        $create = new Order;
        $create->orderID = $order;
        $create->tableID = $meja;
        $create->orderDate = $mytime;
        $create->stat = 1;
        $create->save();
    }
    $orders = Order::find($order);
    return view('home',[
        'array1' => $array1['results'],
        'array2' => $array2['results'],
        'menus' => $menus,
        'mejas' => $mejas,
        'orders' => $orders,
        'query' => 'home',
    ]);
});

Route::get('/Menu/{meja}/{order}/{id}', function ($meja, $order, $id){
    $api = "e5f12dc920b24dfd9f3dee909c56ece0";
    if($id=="Menu"){
      $url = 'https://api.spoonacular.com/recipes/complexSearch?offset=8&number=16&apiKey='.$api;
    }else{
      $url = "https://api.spoonacular.com/recipes/complexSearch?query=".rawurlencode($id)."&number=16&apiKey=".$api;
    }
    $json = file_get_contents($url);
    $array = json_decode($json, true);
    $menus = Menu::get();
    $mejas = Table::find($meja);

    return view('menu', [
        'menus' => $array['results'],
        'prices' => $menus,
        'name' => $id,
        'mejas' => $mejas,
        'order' => $order,
        'query' => $id,
    ]);
});

Route::get('/Cartitem/{meja}/{order}/{back}/{cart}', function ($meja, $order, $back, $cart){
    if($back == 'home'){
        $urlback = "/Home/$meja/$order";
    }else{
        $urlback = "/Menu/$meja/$order/$back";
    }
    $menus = Order::find($order)->menuorder;
    $total = 0;
    $cek = 0;
    foreach($menus as $menu){
        if($menu->menu_menuId == $cart){
            $cek = $menu->ID;
            $total = $menu->qty;
            $total++;
        }
    }
    if($total == 0){
        $create = new MenuOrder;
        $create->order_orderID = $order;
        $create->menu_menuID = $cart;
        $create->qty = 1;
        $create->save();
    }else{
        $update = MenuOrder::find($cek);
        $update->qty = $total;
        $update->save();
    }
    return redirect($urlback);
});

Route::get('/Cart/{meja}/{order}/{back}', function($meja, $order, $back) {
    $menus = Order::find($order);
    $mejas = Table::find($meja);
    if($back == 'home'){
        $urlback = "/Home/$meja/$order";
    }else if($back == 'bill'){
        $urlback = 'bill';
    }else{
        $urlback = "/Menu/$meja/$order/$back";
    }
    return view('cartitem', [
        'menus' => $menus,
        'mejas' => $mejas,
        'order' => $order,
        'query' => $back,
        'urlback' => $urlback,
    ]);
});

Route::get('/Cart/{meja}/{order}/{back}/{id}/{qty}', function($meja, $order, $back, $id, $qty) {
    if($qty == 0){
        $update = MenuOrder::find($id);
        $update->delete();
    }else{
        $update = MenuOrder::find($id);
        $update->qty = $qty;
        $update->save();
    }
    return redirect("/Cart/$meja/$order/$back");
});

Route::get('/Cart/{meja}/{order}/{back}/{id}', function($meja, $order, $back, $id) {
    $update = MenuOrder::find($id);
    $update->delete();
    return redirect("/Cart/$meja/$order/$back");
});

Route::get('/Bill/{meja}/{order}/{total}/{back}', function($meja, $order, $total, $back){
    $bills = Order::find($order);
    $bills->amount = $total;
    $bills->save();
    return redirect("Bill/$meja/$order/$back");

});

Route::get('/Bill/{meja}/{order}/{back}', function($meja, $order, $back){
    $mejas = Table::find($meja);
    $bills = Order::find($order);
    return view('bill', [
        'bills' => $bills,
        'mejas' => $mejas,
        'order' => $order,
        'query' => $back,
    ]);
});

Route::get('/Payment/{meja}/{order}/{method}', function($meja, $order, $method){
    $mejas = Table::find($meja);
    $bill = $meja.$order;
    $bills = Order::find($order);
    $payments = Payment::find($bill);
    if($payments == null){
        $create = new Payment;
        $create->paymentID = $bill;
        $create->paymenttype = $method;
        $create->orderID = $order;
        $create->statusPayment = 0;
        $create->save();
    }else{
        $payments->paymenttype = $method;
        $payments->save();
    }
    $payments = Payment::find($bill);
    if($payments->statusPayment == 0){
        return view('payment', [
            'bills' => $bills,
            'payments' => $payments,
            'mejas' => $mejas,
            'order' => $order,
            'method' => $method,
        ]);
    }else{
        return redirect("Order/$meja/$order");
    }
});

Route::get('/Order/{meja}/{order}', function($meja, $order){
    $mejas = Table::find($meja);
    $menus = Order::where('tableID', '=', $meja)->get();
    return view('order',[
        'mejas' => $mejas,
        'menus' => $menus,
    ]);
});
