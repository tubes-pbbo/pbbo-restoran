<?php

namespace App\Http\Controllers;

use App\domain\HR\entity\Employee;
use App\domain\HR\service\EmployeeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HRController extends Controller
{
    public function getEmployee(){

        $svc = new EmployeeService();
        $employees = $svc->getAll();

        return view('HR/hr',[
            'employees' => $employees,
        ]);
    }

    public function getEmployeeById($id){
        $svc = new EmployeeService();
        $employeetype = $svc->getEmployeeType();
        $employee = $svc->getById($id);

        return view('HR/edit',[
            'employee' => $employee,
            'employeetype' => $employeetype,
        ]);
    }

    public function deleteEmployee($id){
        $svc = new EmployeeService();
        $employee = $svc->deleteData($id);

        return redirect('/HR');
    }


    public function getEmployeeType(){
        $svc = new EmployeeService();
        $employeetype = $svc->getEmployeeType();

        return view('HR/create',[
            'employeetype' => $employeetype,
        ]);
    }


    public function updateEmployee(Request $req, $id){
        $svc = new EmployeeService();
        $update = $svc->updateData($req, $id);

        return redirect('/HR');
    }

    public function postEmployee(Request $req){
        $validator = Validator::make($req->all(), [
            'id' => 'required|max:10',
            'name'=> 'required|max:255',
            'birthdate' => 'required|max:10',
            'employeetype' => 'required|max:1',

        ]);

        if ($validator->fails() || $req->employeetype == 3 && $req->password=="" ){
            return redirect('/createEmployee/create')
            ->withInput()
            ->withErrors($validator);
        }

        $svc = new EmployeeService();
        $create = $svc->createNew($req);

        return redirect('/HR');


    }
}
