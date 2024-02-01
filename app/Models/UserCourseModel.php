<?php 
namespace App\Models;
class UserCourseModel extends Database{
    public function register($id_user, $id_course){
        $sql ="INSERT INTO user_courses(id_user, id_course) VALUES($id_user, $id_course)";
        $this->getData($sql, false);
    }
}