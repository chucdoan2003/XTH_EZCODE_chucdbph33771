<?php
namespace App\models;
class   CourseModel extends Database{
    public $table ='courses';
    function list(){
        $sql = "SELECT $this->table.*,category.name as category FROM $this->table JOIN category ON $this->table.cate_id =category.id";
        return $this->getData($sql,true);
    }
    function listcate($id_cate){
        $sql="SELECT * FROM courses where cate_id = $id_cate";
        return $this->getData($sql, true);

    }
    function add($name,$price, $description, $thumbnail, $cate_id){
        $sql = "INSERT INTO $this->table(name, price, description, image, cate_id) VALUES('$name', $price, '$description', '$thumbnail', $cate_id)";
        $this->getData($sql, false);
    }
    function getOne($id){
        $sql= "SELECT * FROM $this->table where id = $id";
        return $this->getData($sql, false);
    }
    function edit($id, $name, $price, $description, $thumbnail, $cate_id){
        $sql = "UPDATE $this->table set name = '$name', description= '$description', image='$thumbnail',
        price=$price, cate_id=$cate_id WHERE id=$id";
        $this->getData($sql, false);
    }
    function deleteCourse($id){
        $sql ="DELETE FROM $this->table WHERE id =$id";
        $this->getData($sql, false);
    }
    function listCouresRegister(){
        $sql="SELECT courses.name,courses.image, users.username, user_courses.payments_status, user_courses.id FROM user_courses JOIN users ON user_courses.id_user=users.id JOIN courses ON user_courses.id_course=courses.id ORDER BY user_courses.id DESC";
        return $this->getData($sql, true);
    }
    function listCouresRegisterUser($id){
        $sql="SELECT courses.name, courses.image, users.username, user_courses.payments_status, user_courses.id FROM user_courses JOIN users ON user_courses.id_user=users.id JOIN courses ON user_courses.id_course=courses.id WHERE user_courses.id_user=$id ORDER BY user_courses.id DESC";
        return $this->getData($sql, true);
    }
    function change($id,$status){
        $sql = "UPDATE user_courses set payments_status=$status WHERE id=$id";
        $this->getData($sql, false);
    }
    
}