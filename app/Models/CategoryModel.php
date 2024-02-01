<?php
namespace App\models;
class CategoryModel extends Database{
    public $table='Category';
    function list(){
        $sql = "SELECT * FROM $this->table";
        return $this->getData($sql,true);
    }
    public function add($name, $description, $thumbnail){
        $sql = "INSERT INTO $this->table(name, description, thumbnail) VALUES('$name', '$description','$thumbnail')";
        $this->getData($sql, false);
    }
    function getOne($id){
        $sql= "SELECT * FROM $this->table where id = $id";
        return $this->getData($sql, false);
    }
    function edit($id, $name, $description, $thumbnail){
        $sql = "UPDATE $this->table set name = '$name', description= '$description', thumbnail='$thumbnail'
        WHERE id=$id";
        $this->getData($sql, false);
    }
    function deleteCate($id){
        $sql ="DELETE FROM $this->table WHERE id =$id";
        $this->getData($sql, false);
    }
}