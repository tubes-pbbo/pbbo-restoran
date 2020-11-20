<?php

namespace App\domain\HR\service;

use App\domain\HR\entity\Chef;
use App\domain\HR\dao\ChefDao;
use Illuminate\Http\Request;

class ChefService {

    private $dao;

    public function __construct() {
        $this->dao = new ChefDao();
    }

    // public function createNew(Request $req) {
    //     $this->dao->create($req);
    // }

    public function getAll() {
        return $this->dao->findAll();
    }

    public function getById($id) {
        return $this->dao->findById($id);
    }

    // public function updateData(Request $req , $id) {
    //     return $this->dao->update($req, $id);
    // }

    public function deleteData($id) {
        return $this->dao->delete($id);
    }

    // public function geMeja() {
    //     return $this->dao->findMeja();
    // }


}

?>
