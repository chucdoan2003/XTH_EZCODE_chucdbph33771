<?php
namespace App\Controllers;
use App\models\CommentModel;
use App\Models\CourseContentModel;
use App\models\CourseModel;
use App\models\RateModel;
class RateController extends Controller{
    public $rate, $course, $comment, $lecture;
    public function __construct(){
        $this->rate= new RateModel();
        $this->course = new CourseModel();
        $this->comment= new CommentModel();
        $this->lecture = new CourseContentModel();

    }  
    public function add($id){ 
        $id_user= $_SESSION['user']['id'];
        $rate= $_POST['rating'];
        $this->rate->add($id_user, $id, $rate);
        $rates= $this->rate->listRateCourse($id);
        $course= $this->course->getOne($id);
        $comments= $this->comment->listCommentCourse($id);  
        $lectures= $this->lecture->list($id); 
        return $this->render2('product.detail', compact('course','comments', 'rates', 'lectures'));

    }
}