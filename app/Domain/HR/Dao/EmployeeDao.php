<?php

namespace App\domain\HR\dao;

/**
 *Hak cipta dari source code ini dimiliki oleh :
 *Cynthia
 *Ferani
 *Yoel
 *Fransiskus
 */

use App\domain\HR\entity\Employee;
use App\domain\HR\entity\EmployeeType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Author : Fransiskus
 *          Irfin
 *          Ferani
 */
class EmployeeDao
{

    public function findAll()
    {
        return Employee::all();
    }

    public function findById($id)
    {
        return Employee::get()->where('employeeID', '=', $id)->first();
    }

    public function create(Request $req)
    {
        $data = new Employee();
        $data->employeeID=$req->id;
        $data->name=$req->name;
        $data->birthdate=$req->birthdate;
        $data->employeeType=$req->employeetype;

        if($req->password){
            $data->password=bcrypt($req->password);
        }
        $data->save();
    }

    public function update(Request $req , $id){
        $data = Employee::findOrFail($id);
        $data->name=$req->name;
        $data->employeetype=$req->employeetype;
        $data->password=bcrypt($req->password);
        $data->save();
    }

    public function delete($id){
        $data = Employee::findOrFail($id);
        $data->delete();

    }

    public function findEmployeeType(){
        return EmployeeType::all();

    }

    public function login(Request $req){
        return Auth::attempt(['employeeID' =>  $req->id ,'password' => $req->password, 'employeeType' => 3]);
    }

}
