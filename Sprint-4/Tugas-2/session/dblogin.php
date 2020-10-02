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

    public function login($username,$password){
        $sql="SELECT * FROM loggin where username = '$username' ";
        $stm= $this->conn->prepare($sql);
        $stm->execute();

        $result=$stm->fetchALL(pdo::FETCH_ASSOC);
        
        if (!$result) {
            return [
                'status'=>'error',
                'msg'   =>'username error'
            ];
            header("Location:sesion.php");
        }
        foreach ($result as $key) {
            
        }
        if ($key['pass']==$password) {
            // return[
            //     'status'=>'succes',
            //     'msg'=>'Login Berhasil'
            // ];
            header("Location:index1.php");
        }
        }
        


    
    public function register($username,$pass,$alamat,$jurusan){
        $sql="INSERT INTO loggin(username,pass,alamat,jurusan) VALUES ('$username','$pass','$alamat',$jurusan) ";
        $stm= $this->conn->prepare($sql);
        $stm->execute();
    }

    
}

?>