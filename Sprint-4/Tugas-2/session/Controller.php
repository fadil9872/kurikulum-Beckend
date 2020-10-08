<?php
class Controller {
    public function __construct(){
        try {
            $this->conn= new PDO("mysql:host=localhost;dbname=latihan_get",user,12345678);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Failed : ".$e->getMessage();
        }
    
    }
    public function login($username, $password){
        $sql = "SELECT * FROM loggin WHERE username = '$username';";
        $stm = $this->conn->prepare($sql);
        $stm->execute();
        $result = $stm->fetchALL(pdo::FETCH_ASSOC);

        if (count($result) == 0) {
            return[
                'status'=>'error',
                'msg'=>'Username Anda Salah'
            ];
        }else {
            $sql = "SELECT * FROM loggin WHERE username = '$username'AND pass = '$password'";
            $stm = $this->conn->prepare($sql);
            $stm->execute();
            $result = $stm->fetchALL(pdo::FETCH_ASSOC);

            if (count($result) == 0) {
                return[
                    'status'=>'error',
                    'msg'=>'Password Salah'
                ];
            }else {
                session_start();
                $_SESSION['nm_user']=$result[0]['nm_user'];
                return[
                    'status'=>'succes'
                ];
                
            }
        }
    }
    public function register($username,$pass,$alamat,$jurusan){
        $sql="INSERT INTO loggin(username,pass,alamat,jurusan) VALUES ('$username','$pass','$alamat',$jurusan) ";
        $stm= $this->conn->prepare($sql);
        $stm->execute();
    }

}
?>