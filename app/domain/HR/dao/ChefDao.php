<?php

namespace App\domain\HR\dao;

use App\domain\HR\entity\Chef;
use App\domain\HR\entity\Meja;
use Illuminate\Http\Request;


class ChefDao
{

    public function findAll()
    {
        return Chef::all();
    }

    public function findById($id)
    {
        return Chef::get()->where('orderID', '=', $id)->first();
    }

    public function delete($id){
        $data = Chef::findOrFail($id);
        $data->delete();
        
    }

    public function findMeja(){
        return Meja::all();
    }

}