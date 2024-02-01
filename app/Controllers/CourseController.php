<?php
namespace App\Controllers;

use App\Models\CourseContentModel;
use App\Models\CourseModel;
use App\Models\CategoryModel;
use App\Models\CommentModel;
use App\models\RateModel;
use App\Models\UserCourseModel;

class CourseController extends Controller{
    public $category,$course, $comment, $lecture, $rate;
    public function __construct(){
        $this->category= new CategoryModel();
        $this->course= new CourseModel();
        $this->comment= new CommentModel();
        $this->lecture = new CourseContentModel();
        $this->rate = new RateModel();
    

    }
    public function list(){
        $courses= $this->course->list();
        return $this->render2('admin.courses.list',compact('courses'));
    }
    public function detail($id){
            $course= $this->course->getOne($id);
            $comments =$this->comment->listCommentCourse($id);
            $rates= $this->rate->listRateCourse($id);
            $lectures= $this->lecture->list($id); 
        return $this->render2('product.detail',compact('course', 'comments', 'rates', 'lectures'));
    }
    public function create(){
        $categories= $this->category->list();
        return $this->render2('admin.courses.add',compact('categories'));
    }
    public function add(){
        if(isset($_POST['add'])){
            $name =$_POST['name'];
            $price=$_POST['price'];
            $description=$_POST['description'];
            $cate_id= $_POST['cate_id'];
            $thumbnail=$_FILES['image']['name'];
            $img_tmp=$_FILES['image']['tmp_name'];
            move_uploaded_file($img_tmp,'public/assets/image/course/'.$thumbnail);
            $this->course->add($name, $price,$description, $thumbnail, $cate_id);  
            $courses= $this->course->list();
            $this->render2('admin.courses.list', compact('courses'));
        }
    }
    public function edit($id){
        $course=$this->course->getOne($id);
        $categories=$this->category->list();
        return $this->render2('admin.courses.edit',compact('course','categories'));
    }
    public function update($id){
        if(isset($_POST['edit'])){
            $name =$_POST['name'];
            $price=$_POST['price'];
            $description=$_POST['description'];
            $cate_id= $_POST['cate_id'];
            $thumbnail=$_FILES['image']['name'];
            $img_tmp=$_FILES['image']['tmp_name'];
            move_uploaded_file($img_tmp,'public/assets/image/course/'.$thumbnail);
            $this->course->edit($id,$name, $price, $description, $thumbnail, $cate_id);  
            $courses= $this->course->list();
            return $this->render2('admin.courses.list', compact('courses'));
        }
    }
    public function deleteCourse($id){
        $this->course->deleteCourse($id);   
        $courses= $this->course->list();
        return $this->render2('admin.courses.list', compact('courses'));
    }
    public function register($id){
        $UserCourse = new UserCourseModel();
        if(isset($_SESSION['user'])){
            $id_user=$_SESSION['user']['id'];
        }
        $UserCourse->register($id_user,$id);
        $course= $this->course->getOne($id);
        $success=true;
        $rates= $this->rate->listRateCourse($id);
        $lectures= $this->lecture->list($id); 
        $comments= $this->comment->listCommentCourse($id);
        return $this->render2('product.detail',compact('course','success','comments','lectures', 'rates'));
    }
    public function listRegistcourse(){
        $registedCourse= $this->course->listCouresRegister();
        return $this->render2('admin.courseRegister.list',compact('registedCourse'));
    }
    public function listRegistcourseUser(){
        $id_user= $_SESSION['user']['id'];
        $registedCourse= $this->course->listCouresRegisterUser($id_user);
        return $this->render2('course.listRegister',compact('registedCourse'));
    }
    public function change($id){
        $this->course->change($id, 1);
        $id_user= $_SESSION['user']['id'];
        $registedCourse= $this->course->listCouresRegisterUser($id_user);
        return $this->render2('course.listRegister',compact('registedCourse'));
        
    }
}