<?php
 const DATABASE = 'xth_ezcode';
 const USER = 'root';
 const PASS = '';
 const DBHOST = 'localhost';
 const CHARSET ='UTF8';

const BASE_URL = "http://localhost/ezcode/";

function route($url) {
    return BASE_URL.$url;
}
function flash($key, $msg, $route){
    $_SESSION[$key]= $msg;
    switch ($key) {
        case 'success':
            unset($_SESSION['success']);
            break;
        case 'errors':
            unset($_SESSION['errors']);
            break;
    }
    header('location:'.BASE_URL.'?msg='.$key);
}