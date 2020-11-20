<?php

use Illuminate\Support\Facades\Route;
use App\Menu;
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

// Route Customer
Route::get('/Customer', function () {
    $api = 'e5f12dc920b24dfd9f3dee909c56ece0';
    $url1 = 'https://api.spoonacular.com/recipes/complexSearch?number=4&apiKey='.$api;
    $url2 = 'https://api.spoonacular.com/recipes/complexSearch?offset=4&number=4&apiKey='.$api;
    $url3 = 'https://api.spoonacular.com/recipes/complexSearch?number=30&apiKey='.$api;
    $json1 = file_get_contents($url1);
    $json2 = file_get_contents($url2);
    $json3 = file_get_contents($url3);
    $array1 = json_decode($json1, true);
    $array2 = json_decode($json2, true);
    $array3 = json_decode($json3, true);
    $menus = Menu::get();

    return view('Customer/home',[
        'array1' => $array1['results'],
        'array2' => $array2['results'],
        'array3' => $array3['results'],
        'menus' => $menus,
    ]);
});

Route::get('/Customer/Menu', function () {
    $api = 'e5f12dc920b24dfd9f3dee909c56ece0';
    $url3 = 'https://api.spoonacular.com/recipes/complexSearch?number=30&apiKey='.$api;
    $json3 = file_get_contents($url3);
    $array3 = json_decode($json3, true);
    $menus = Menu::get();

    return view('Customer/menu',[

        'array3' => $array3['results'],
        'menus' => $menus,
    ]);
});


// Route Kasir
Route::get('/Kasir','KasirController@view');

// Route Chef
Route::get('/Chef', 'ChefController@view');

// Route Waiters
Route::get('/Waiters','WaitersController@view');

//Route Kasir Payment
Route::get('/Kasir/Payment/{tableName}','KasirController@payment');




