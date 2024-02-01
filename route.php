<?php

use App\Controllers\AdminController;
use App\Controllers\CommentController;
use App\Controllers\RateController;
use Phroute\Phroute\RouteCollector;

use App\Models\Database;
use App\Controllers\Controller;
use App\Controllers\UserController;
use App\Controllers\CategoryController;
use App\Controllers\CourseContentController;
use App\Controllers\CourseController;


use App\Controllers\HomeController;



$url= isset($_GET['url'])?$_GET['url']:'/';

$router = new RouteCollector();
$router->get('/',[HomeController::class, 'index']);
$router->get('home',[HomeController::class, 'index']);
$router->get('home/cate/{id}',[HomeController::class,'course_cate']);

$router->get('course',[CourseController::class, 'list']);
$router->get('course/{id}',[CourseController::class, 'detail']);
$router->get('course/register/list',[CourseController::class, 'listRegistcourseUser']);
$router->post('course/register/{id}',[CourseController::class, 'register']);
$router->post('course/change/{id}',[CourseController::class, 'change']);
$router->filter('auth',function(){
    if(!isset($_SESSION['user'])){
        header('location:'.BASE_URL.'user/login');
         return false;
    }});

$router->post('comment/add',[CommentController::class,'add'],['before'=>'auth']);

$router->filter('authAdmin',function(){
    if(!isset($_SESSION['user'])){
        header('location:'.BASE_URL.'user/login');
         return false;
    }
    if(isset($_SESSION['user']) && $_SESSION['user']['role']!==1 ){
        header('location:'.BASE_URL.'user/login');
        return false;
    }
});
 
//Rate
$router->post('admin/course/rate/{id}', [RateController::class, 'add']);

$router->group(['before'=>'authadmin','prefix'=>'admin'],function($router){
    $router->get('/',[AdminController::class, 'index']);
    //user list
    $router->get('user/list',[UserController::class, 'list']);

    // list comment 
    $router->get('/comment/list',[CommentController::class, 'list']);
    $router->get('/comment/delete/{id}',[CommentController::class, 'deleteComment']);

    //category
    $router->group(['prefix'=>'category'],function($router){
        $router->get('/',[CategoryController::class,'list']);
        $router->get('/list',[CategoryController::class,'list']);
        $router->get('/create',[CategoryController::class,'create']);
        $router->get('/edit/{id}',[CategoryController::class,'edit']);
        $router->post('/update/{id}',[CategoryController::class,'update']);
        $router->post('/add',[CategoryController::class,'add']);
        $router->get('delete/{id}',[CategoryController::class, 'deleteCate']);
    });

    // course
    $router->group(['prefix'=>'course'],function($router){
        $router->get('/list',[CourseController::class,'list']);
        $router->get('/create',[CourseController::class,'create']);
        $router->get('/edit/{id}',[CourseController::class,'edit']);
        $router->post('/edit/{id}',[CourseController::class,'update']);
        $router->post('/add',[CourseController::class,'add']);
        $router->get('delete/{id}',[CourseController::class, 'deleteCourse']);
        $router->get('register',[CourseController::class, 'listRegistcourse']);

        
        $router->group(['prefix'=>'content'],function($router){
            $router->get('list/{id}',[CourseContentController::class, 'list']);
            $router->get('create/{id}',[CourseContentController::class, 'create']);
            $router->get('edit/{id}',[CourseContentController::class, 'edit']);
            $router->post('edit/{id}',[CourseContentController::class, 'update']);
            $router->post('add',[CourseContentController::class, 'add']);
            $router->get('delete/{id}',[CourseContentController::class, 'deleteLecture']);
            ;
        });
    });
});

$router->group(['prefix'=>'user'],function($router){
    $router->get('login',[UserController::class, 'login']);
    $router->post('login',[UserController::class, 'login']);
    $router->get('logout',[UserController::class, 'logout']);
    $router->get('register',[UserController::class, 'register']);  
    $router->post('register',[UserController::class, 'register']);  
    $router->get('forgot',[UserController::class, 'forgot']);  
    $router->post('forgot',[UserController::class, 'forgot']); 
    $router->get('/delete/{id}',[UserController::class, 'deleteUser']);
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);