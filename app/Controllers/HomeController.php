<?php
namespace App\Controllers;
use App\models\CategoryModel;
use App\models\CourseModel;
class HomeController extends Controller{
    public $course, $category;
    public function __construct(){
        $this->course=new CourseModel();
        $this->category= new CategoryModel();
    }
    
    public function index(){
        $courses = $this->course->list();
        $categories= $this->category->list();
        return $this->render2('home.index',compact('courses', 'categories'));
    }
    public function course_cate($id){
        $courses=$this->course->listcate($id);
        $categories= $this->category->list();
        return $this->render2('home.index',compact('courses','categories'));
    }
}