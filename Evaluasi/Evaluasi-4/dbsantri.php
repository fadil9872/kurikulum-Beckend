<?php
class Data {
    public function __construct(){
        $server ="localhost";
        $user   ="user";
        $pass="12345678";
    
        try {
            $this->conn=new PDO("mysql:host=$server;dbname=evaluasi2",$user,$pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Failed".$e->getMessage();
        }
    }
    public function read(){
        $sql="SELECT * FROM datasantri";
        $stm=$this->conn->prepare($sql);
        $stm->execute();

        $result=$stm->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public function tambah($nama,$umur,$divisi,$asal){
        $sql="INSERT INTO datasantri(nama,umur,divisi,asal) VALUES ('$nama', $umur, '$divisi', '$asal');";
        $stm=$this->conn->prepare($sql);
        $stm->execute();

        
    }
    public function update($nama,$umur,$divisi,$asal,$id){
        $sql="UPDATE datasantri SET nama = '$nama', umur = '$umur', divisi = '$divisi', asal = '$asal' WHERE id = '$id';";
        $stm=$this->conn->prepare($sql);
        $stm->execute();

        
    }
    public function delete($value){
        $sql="DELETE FROM datasantri WHERE id = $value;";
        $stm=$this->conn->prepare($sql);
        $stm->execute();

        
    }

}

?>