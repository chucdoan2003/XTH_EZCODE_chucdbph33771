<?php
namespace App\models;
class RateModel extends Database{
    public $table='rate';
    function list(){
        $sql = "SELECT * FROM $this->table";
        return $this->getData($sql,true);
    }
    public function add($id_user, $id_course, $rate){
        $sql = "INSERT INTO $this->table(id_user, id_course, rating) VALUES($id_user, $id_course,$rate)";
        $this->getData($sql, false);
    }
    public function listRateCourse($id_course){
        $sql="SELECT * FROM rate JOIN users ON rate.id_user=users.id where rate.id_course=$id_course ORDER BY rate.id DESC";
        return $this->getData($sql, true);

    }
}