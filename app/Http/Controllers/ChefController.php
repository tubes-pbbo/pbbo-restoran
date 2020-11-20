<?php

namespace App\Http\Controllers;

use App\domain\HR\entity\Chef;
use App\domain\HR\service\ChefService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Menu;
class ChefController extends Controller{


    public function view(){
    $api = 'e5f12dc920b24dfd9f3dee909c56ece0';
    $url3 = 'https://api.spoonacular.com/recipes/complexSearch?number=30&apiKey='.$api;
    $json3 = file_get_contents($url3);
    $array3 = json_decode($json3, true);
    $menus = Menu::get();

    $svc = new ChefService();
    $orders = $svc->getAll();

    return view('Chef/index',[
        'orders'=>$orders,
        'array3' => $array3['results'],
        'menus' => $menus,

    ]);
    }

}

?>