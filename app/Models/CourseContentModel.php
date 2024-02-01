<?php 
namespace App\Models;
class CourseContentModel extends Database{
    public function list($id_course){
        $sql="SELECT * FROM course_content WHERE id_course= $id_course";
        return $this->getData($sql, true);
    }
    public function add($id_course,$title, $content){
        $sql="INSERT INTO course_content(id_course, title, content) VALUES($id_course, '$title', '$content')";
        $this->getData($sql, false);
    }
    public function getOne($id){
        $sql= "SELECT * FROM course_content WHERE id = $id";
        return $this->getData($sql, false);
    }
    public function update($id, $title, $content){
        $sql= "UPDATE course_content set title= '$title', content= '$content' 
        WHERE id= $id";
        $this->getData($sql, false);
    }
    public function deleteLecture($id){
        $sql= "DELETE FROM course_content where id = $id";
        $this->getData($sql, false);
    }
}