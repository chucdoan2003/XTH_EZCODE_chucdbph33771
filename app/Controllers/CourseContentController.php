<?php
namespace App\Controllers;
use App\Models\CourseContentModel;
class CourseContentController extends Controller{
    public $model, $course;
    public function __construct(){
        $this->model= new CourseContentModel();
    }
    public function list($id){
        $lectures = $this->model->list($id);
        return $this->render2('admin.courseContent.list',compact('lectures', 'id'));
    }
    public function create($id){
        return $this->render2('admin.courseContent.add',compact('id'));
    }
    public function add(){
        $title= $_POST['title'];
        $content= $_POST['content'];
        $id =$_POST['id_course'];
        $this->model->add($id, $title, $content);
        $lectures = $this->model->list($id);
        return $this->render2('admin.courseContent.list',compact('lectures', 'id'));
    }
    public function edit($id){
        $lecture= $this->model->getOne($id);
        return $this->render2('admin.courseContent.edit', compact('lecture'));
    }
    public function update($id){
        if(isset($_POST['update'])){
            $id_course= $_POST['id_course'];
            $title= $_POST['title'];
            $content= $_POST['content'];
            $this->model->update($id, $title, $content);
            $lectures = $this->model->list($id_course);
            $id=$id_course;
            return $this->render2('admin.courseContent.list',compact('lectures','id'));
        }
    }
    public function deleteLecture($id){
        $lecture=$this->model->getOne($id);
        $this->model->deleteLecture($id);
        $lectures=$this->model->list($lecture['id_course']);
        return $this->render2('admin.courseContent.list',compact('lectures','id'));
    }
}