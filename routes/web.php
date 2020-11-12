<?php

use Illuminate\Support\Facades\Route;
use App\Menu;
use App\Employee;

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

Route::get('/', function () {
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

Route::get('/menu', function ($id){
    $api = "e5f12dc920b24dfd9f3dee909c56ece0";
    $url = "https://api.spoonacular.com/recipes/complexSearch?query=snack&number=16&apiKey=".$api;
    $json = file_get_contents($url);
    $array = json_decode($json, true);
    $menus = Menu::get();

    return view('menu', [
        'array' => $id,
    ]);
});

Route::post('/cart', function(Request $req) {
    
});
