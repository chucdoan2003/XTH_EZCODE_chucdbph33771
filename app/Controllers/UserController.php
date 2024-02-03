<?php
namespace App\Controllers;

use App\Models\CourseModel;
use App\Models\CategoryModel;

use App\Models\UserModel;

    class UserController extends Controller{
        public $model, $data, $course, $category;
        public function __construct(){
            $this->model= new UserModel();
            $this->course=new CourseModel();
            $this->category= new CategoryModel();
        }
        public function list(){
            $users= $this->model->getAllUser();
            return $this->render2('admin.user.list', compact('users'));
        }
        public function login(){
            if(isset($_POST['login'])){
                $username=$_POST['username'];
                $password=$_POST['password'];
                $user=$this->model->getUser($username, $password);
                if(is_array($user) && $user!=''){
                    $_SESSION['user']=$user;
                    $courses = $this->course->list();
                    $categories = $this->category->list();
                    $this->render2('home.index',compact('courses', 'categories'));
                }else{
                    $this->data['tb']='tài khoản hoặc mật khẩu không đúng';
                    $this->render('user/login',$this->data);
                }
            }else{
                $this->render('user/login');
            }
        }
        public function register(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $username=$_POST['username'];
                $password=$_POST['password'];
                $email=$_POST['email'];
                $this->model->insertUser($username, $password, $email);
                $this->data['tb']='Đăng ký thành công vui lòng đăng nhập';
                $this->render('user/register',$this->data);
            }else{
                $this->data['tb']='';
                $this->render('user/register',$this->data);
            }

        }
        public function forgot(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $email = $_POST['email'];
                $pass=$this->model->sendPass($email);
                if(is_array($pass) && $pass!=''){
                    $this->data['tb']='Mật khẩu của bạn là: '.$pass['password'];
                }else{
                    $this->data['tb']='Email không tồn tại';
                }
                $this->render('user/forgotPass',$this->data);
            }else{
                $this->data['tb']='';
                $this->render('user/forgotPass',$this->data);
            }
        }
        public function logout(){
            unset($_SESSION['user']);
            $this->render2('user.login');
        }
        public function deleteUser($id){
            $this->model->deleteUser($id);
            $users= $this->model->getAllUser();
            return $this->render2('admin.user.list',compact('users'));
        }
    }