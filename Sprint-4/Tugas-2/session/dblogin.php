<?php
session_start();

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

    public function login($username){
        $sql="SELECT username FROM loggin where username = '$username'";
        $stm= $this->conn->prepare($sql);
        $stm->execute();

        if($hasil =$stm->fetchAll(PDO::FETCH_ASSOC)){
            echo "<script>
            alert('Login Berhasil');
            Location:'index1.php');
            </script>";
                return false;
        }else {
            echo "<script>
            alert('Login Gagal');
            Location:'sesion.php');
            </script>";
            
        }
       
    }
            
    public function register($username,$pass,$alamat,$jurusan){
        $sql="INSERT INTO loggin(username,pass,alamat,jurusan) VALUES ('$username','$pass','$alamat',$jurusan) ";
        $stm= $this->conn->prepare($sql);
        $stm->execute();
    }

    
}

?>