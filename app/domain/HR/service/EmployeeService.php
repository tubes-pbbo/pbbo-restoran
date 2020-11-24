<?php

namespace App\domain\HR\service;

use App\domain\HR\entity\Employee;
use App\domain\HR\dao\EmployeeDao;
use Illuminate\Http\Request;

class EmployeeService {

    private $dao;

    public function __construct() {
        $this->dao = new EmployeeDao();
    }

    public function createNew(Request $req) {
        $this->dao->create($req);
    }

    public function getAll() {
        return $this->dao->findAll();
    }

    public function getById($id) {
        return $this->dao->findById($id);
    }

    public function updateData(Request $req , $id) {
        return $this->dao->update($req, $id);
    }

    public function deleteData($id) {
        return $this->dao->delete($id);
    }

    public function getEmployeeType() {
        return $this->dao->findEmployeeType();
    }

    public function cashierLogin(Request $req) {
        return $this->dao->login($req);
    }

}

?>
