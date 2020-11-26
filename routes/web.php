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

 // Route Kasir
Route::get('/Cashier', 'CashierController@view');
Route::post('/CashierLogin', 'CashierController@login')->name('login');
Route::group(['middleware'=>'cashier'],function(){
    Route::get('/CashierHome','CashierController@cashierHome');
    Route::get('/Cashier/{id}','CashierController@cashierTable')->name('cashierTable');
    Route::get('/CashierPayment/{tableId}/{cashierId}/{PaymentId}','CashierController@cashierPayment');
    Route::get('/Cashier/Payment/{tableName}','CashierController@payment');
    Route::get('/CashierHistory', 'CashierController@history');
    Route::get('/CashierOrderDetail/{id}', 'CashierController@orderDetail');
    Route::get('/logout', 'CashierController@logout');
});
Route::get('/NotCashier', 'CashierController@notCashier');


// Route Chef
Route::get('/Chef','ChefController@view');
Route::get('/Chef/{id}','ChefController@updateMenu');
Route::get('/ChefRecipe/{id}','ChefController@showRecipe');


// Route Waiters
Route::get('/Waiters','WaitersController@view');
Route::get('/WaitersTable/{id}','WaitersController@changeTable');
Route::get('/WaitersOrder/{orderId}/{menuId}','WaitersController@changeOrder');


//Route Customer
Route::get('/Customer', 'CustomerController@cust');
Route::get('/{meja}', 'CustomerController@createOrder');
Route::get('/Home/{order}', 'CustomerController@home');
Route::get('/Menu/{order}/{id}', 'CustomerController@menu');
Route::get('/Cartitem/{order}/{back}/{cart}', 'CustomerController@addItem');
Route::get('/Cart/{order}/{back}', 'CustomerController@cartItem');
Route::get('/Cart/{order}/{back}/{id}', 'CustomerController@deleteQuantity');
Route::get('/Cart/{order}/{back}/{id}/{qty}', 'CustomerController@addQuantity');
Route::get('/Bill/{order}/{back}', 'CustomerController@bill');
Route::get('/Bill/{order}/{total}/{back}', 'CustomerController@updateAmount');
Route::get('/Payment/{order}/{method}', 'CustomerController@payment');
Route::get('/Order/{meja}', 'CustomerController@viewOrder');
