<?php
namespace App\Controllers;
use App\models\CommentModel;
use App\Models\CourseContentModel;
use App\models\CourseModel;
use App\models\RateModel;
class CommentController extends Controller{
    public $comment, $course, $rate,$lecture;
    public function __construct(){
        $this->comment= new CommentModel();
        $this->course= new CourseModel();
        $this->rate = new RateModel();
        $this->lecture = new CourseContentModel();
        
    }
    public function list(){
        $comments=$this->comment->list();
        return $this->render2('admin.comments.list',compact('comments'));
    }
    public function add(){
        if(isset($_POST['add'])){
            if(isset($_SESSION['user'])){
                $id_user = $_SESSION['user']['id'];
            }
            $id_course= $_POST['id_course'];
            $content= $_POST['content'];
            $this->comment->add($id_user,$id_course, $content);
            // view
            $course= $this->course->getOne($id_course);
            $comments =$this->comment->listCommentCourse($id_course);
            $rates= $this->rate->listRateCourse($id_course);
            $lectures= $this->lecture->list($id_course); 
            return $this->render2('product.detail', compact('course', 'comments','rates', 'lectures'));
        }

    }
    public function deleteComment($id){
        $this->comment->deleteComment($id);
        $comments=$this->comment->list();
        return $this->render2('admin.comments.list',compact('comments'));
    }
}