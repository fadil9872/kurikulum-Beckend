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
    public function insert($nama,$umur,$jurusan){
        $sql = "INSERT INTO datauser(nama,umur,jurusan) VALUES ('$nama',$umur,'$jurusan');";
        $stm = $this->conn->prepare($sql);
        $stm->execute();
    }
    public function user(){
        $sql = "SELECT * FROM datauser;";
        $stm = $this->conn->prepare($sql);
        $stm->execute();

        $result=$stm->fetchALL(pdo::FETCH_ASSOC);
        return $result;
    }
    public function update($nama,$umur,$jurusan,$id){
        $sql = "UPDATE datauser SET nama = '$nama', umur = '$umur',jurusan = '$jurusan' WHERE id = '$id';";
        $stm = $this->conn->prepare($sql);
        $stm->execute();
    }

    public function delete($value){
        $sql = "DELETE FROM datauser WHERE id = '$value'";
        $stm = $this->conn->prepare($sql);
        $stm->execute();
        
    }
}
?>