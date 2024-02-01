<?php
    namespace App\Models;
    use PDO;
    class Database{
        public function getConnect(){
            $conn = new PDO('mysql:host='.DBHOST.';chatset='.CHARSET.';dbname='.DATABASE, USER, PASS);
            return $conn;
        }
        public function getData($sql, $getALl = true){
            $conn= $this->getConnect();
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            if($getALl){
                return $stmt->fetchAll();
            }else{
                return $stmt->fetch();
            }
        }
    }