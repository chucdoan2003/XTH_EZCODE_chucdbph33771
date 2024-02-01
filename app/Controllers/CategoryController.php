<?php
namespace App\Controllers;

use App\Models\CategoryModel;
class CategoryController extends Controller{
    public $model, $data=[];
    public function __construct(){
        $this->model= new CategoryModel();
        
    }
    public function list(){
        $categories=$this->model->list();
        $this->render2('admin.category.list',compact('categories'));
    }
    public function create(){  
        return  $this->render2('admin.category.add');  
    }
    public function add(){
        if(isset($_POST['add'])){
            $name =$_POST['name'];
            $description=$_POST['description'];
            $thumbnail=$_FILES['image']['name'];
            $img_tmp=$_FILES['image']['tmp_name'];
            move_uploaded_file($img_tmp,'public/assets/image/category/'.$thumbnail);
            $this->model->add($name, $description, $thumbnail);
        }
        $categories=$this->model->list();
        $this->render2('admin.category.list',compact('categories'));
    }
    public function edit($id){
            $category=$this->model->getOne($id);
            return $this->render2('admin.category.edit',compact('category'));
        
    }
    public function update($id){
        if(isset($_POST['edit'])){
            $name =$_POST['name'];
            $description=$_POST['description'];
            $thumbnail=$_FILES['image']['name'];
            $img_tmp=$_FILES['image']['tmp_name'];
            move_uploaded_file($img_tmp,'public/assets/image/category/'.$thumbnail);
            $this->model->edit($id, $name, $description, $thumbnail);
            $categories=$this->model->list();
            return $this->render2('admin.category.list',compact('categories'));   
        }
    }
    public function deleteCate($id){
        $this->model->deleteCate($id);
        $categories=$this->model->list();
        $this->render2('admin.category.list',compact('categories'));        
    }
}