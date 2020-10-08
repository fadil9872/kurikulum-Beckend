<?php
class Controller{
    public function __construct(){
        try {
            $this->conn=new PDO("mysql:host=localhost;dbname=latihan_get",user,12345678);
            $this->conn->setAttribute(pdo::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);
        } catch (PDOException $th) {
            echo "Connection Failed".$th->getMessage();
        }
    }
    public function read(){
        $sql="SELECT * FROM lahtihan_get2;";
        $stm=$this->conn->prepare($sql);
        $stm->execute();

        $result=$stm->fetchALL(pdo::FETCH_ASSOC);
        return $result;
    }
    public function read_update($id){
        $sql="SELECT * FROM lahtihan_get2 WHERE id= $id;";
        $stm=$this->conn->prepare($sql);
        $stm->execute();

        $result=$stm->fetchALL(pdo::FETCH_ASSOC);
        return $result;
    }
    public function insert($barang,$harga){
        $sql="INSERT INTO lahtihan_get2(barang,harga) VALUES ('$barang','$harga');";
        $stm=$this->conn->prepare($sql);
        $stm->execute();
    }
    public function update($barang,$harga,$id){
        $sql="UPDATE lahtihan_get2 barang = '$barang', harga ='$harga' WHERE id = $id;";
        $stm=$this->conn->prepare($sql);
        $stm->execute();
    }
    public function delete($value){
        $sql="DELETE FROM lahtihan_get2 WHERE id = $value ;";
        $stm=$this->conn->prepare($sql);
        $stm->execute();
    }

}

?>