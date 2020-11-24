<?php

namespace App\Http\Controllers;

use App\domain\Sales\service\SalesService;
use App\Domain\Sales\Entity\Menu;
use App\Domain\Sales\Entity\MenuOrder;

class ChefController extends Controller{


    public function view(){
        $svc = new SalesService();
        $tables = $svc->getAllTable();

        return view('Chef/index',[
            'tables'=>$tables,

        ]);
    }

    public function updateMenu($id){
        $svc = new SalesService();
        $tables = $svc->getAllTable();
        $order = $svc->updateMenuOrderStatus($id);

        return view('Chef/index',[
            'tables'=>$tables,
        ]);
    }

    public function showRecipe($id){
        $svc = new SalesService();
        $menu = $svc->getMenuById($id);

        $api = 'e5f12dc920b24dfd9f3dee909c56ece0';
        $url = 'https://api.spoonacular.com/recipes/'.$id.'/information?apiKey='.$api;
        $json = file_get_contents($url);
        $array = json_decode($json, true);
        return view('Chef/recipe',[
            // 'recipes'=>$url3,
            'menu' => $menu,
            'recipes' => $array['extendedIngredients'],
            'instruction' => $array['instructions'],
        ]);
    }


}

?>
