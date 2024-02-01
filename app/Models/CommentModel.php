<?php
namespace App\models;
class CommentModel extends Database{
    public $table='comment';
    function list(){
        $sql = "SELECT comment.id, comment.content, users.username, courses.name FROM comment JOIN users ON comment.id_user=users.id JOIN courses ON comment.id_course=courses.id";
        return $this->getData($sql,true);
    }
    public function add($id_user, $id_course, $content){
        $sql = "INSERT INTO $this->table(id_user, id_course, content) VALUES($id_user, $id_course,'$content')";
        $this->getData($sql, false);
    }
    public function listCommentCourse($id_course){
        $sql="SELECT * FROM `comment` JOIN users ON comment.id_user=users.id where comment.id_course=$id_course ORDER BY comment.id DESC";
        return $this->getData($sql, true);

    }
    function deleteComment($id){
        $sql ="DELETE FROM $this->table WHERE id =$id";
        $this->getData($sql, false);
    }
}