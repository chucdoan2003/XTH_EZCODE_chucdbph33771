<?php
namespace App\Controllers;
use eftec\bladeone\BladeOne;
class Controller{
    public function render($view, $data=[]){ 
        if(!empty($data)){
            extract($data);
        }
        if(file_exists('app/views/'.$view.'.php')){
            require('app/views/'.$view.'.php');
        }
    }
    protected function render2($viewFile, $data = []){
        $viewDir = "./app/views";
        $storageDir = "./storage";
        $blade = new BladeOne($viewDir,$storageDir, BladeOne::MODE_DEBUG);
        echo $blade->run($viewFile, $data);
    }
}