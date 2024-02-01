<?php
    namespace App\Models;
    class UserModel extends Database{
        public function getAllUser(){
            $sql = 'select * from users';
            return $this->getData($sql, true);
        }    
        public function getUser($userName, $passWord){
            $sql = "select * from users where username='$userName' and password='$passWord'";
            return $this->getData($sql, false);
        }
        public function updateUser($id, $userName, $passWord, $email, $fullname, $gender, $tel, $avt){
            $sql = "UPDATE users SET username = '$userName', password='$passWord',
            email = '$email', fullname = '$fullname', gender = '$gender', tel = '$tel', avt = '$avt'
            WHERE id = $id";
            $this->getData($sql, false);
        }
        public function insertUser($userName, $passWord, $email){
            $sql = "INSERT INTO users(username, password, email) VALUES('$userName', '$passWord', '$email')";
            $this->getData($sql, false);
        }
        public function deleteUser($id){
            $sql = "DELETE FROM users where id = $id";
            $this->getData($sql, false);
        }
        public function updatePass($id, $passWord){
            $sql ="UPDATE users SET password='$passWord' where id = $id";
            $this->getData($sql, false);
        }
        public function sendPass($email){
            $sql="SELECT password, email FROM users where email = '$email'";
            return $this->getData($sql, false);
        }
    }