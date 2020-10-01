<?php

class Data {
    public function __construct(){
        $server="localhost";
        $user="user";
        $pass="12345678";
    
        try {
            $this->conn = new PDO("mysql:host=$server;dbname=latihan_get",$user,$pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Failed".$e->getMessage();
        }
    }
    public function read(){
        $sql="SELECT user,pass FROM login2;";
        $stm=$this->conn->prepare($stm);
        $stm->execute();

        $result=$stm->fetchALL(pdo::FETCH_ASSOC);
        return $result;
    }
    public function login($username,$password){
        $sql="SELECT user,pass FROM login2 where user = '$username'AND pass = '$password' ";
        $stm= $this->conn->prepare($sql);
        $stm->execute();

        $result=$stm->fetchALL(pdo::FETCH_ASSOC);
        if (!$result) {
            return [
                'status'=>'error',
                'msg'=>'username error'
            ];
        }
            return[
                'status'=>'succes',
                'msg'=>'Login Berhasil'
            ];

    }

    
}

?>