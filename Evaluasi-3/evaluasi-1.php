<?php
class Santri {
    public function __construct(){
        $server="localhost";
        $user="user";
        $password="12345678";

        try {
            $this->conn = new PDO("mysql:host=$server;dbname=evaluasi",$user,$password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $th) {
            echo "connection Failed".$th->getMessage();
        }
    }

    public function read(){
        $sql= "SELECT * FROM santri;";
        $statement= $this->conn->prepare($sql);
        $statement->execute();

        $result=$statement->fetchALL(pdo::FETCH_ASSOC);
        print_r($result);
    }

    public function insert(){
        echo "Nama = ";
        $nama =trim(fgets(STDIN));
        echo "Nilai = ";
        $Nilai =trim(fgets(STDIN)); 
        $sql = "INSERT INTO santri(Nama,Nilai) Values ('".$nama."','".$Nilai."')";
        $statement= $this->conn->prepare($sql);
        $statement->execute();
    }

    public function update_nilai(){
        echo "Nama = ";
        $nama =trim(fgets(STDIN));
        echo "Nilai = ";
        $Nilai =trim(fgets(STDIN));
        $sql = "UPDATE santri SET Nilai = $Nilai WHERE Nama = '$nama'";
        $statement= $this->conn->prepare($sql);
        $statement->execute();
    }

    public function delete(){
        echo "Nama = ";
        $nama =trim(fgets(STDIN));
        $sql = "DELETE FROM santri WHERE Nama = '$nama'";
        $statement= $this->conn->prepare($sql);
        $statement->execute();
        
    }
}
$program = new Santri;
$kondisi=true;
while ($kondisi) {
    echo "=======================================\n";
    echo "|  Pengisian Nilai Santri Pondok IT   |\n";
    echo "=======================================\n\n";
    echo "1. Read DataBase. \n";
    echo "2. Insert Santri. \n";
    echo "3. Update Nilai Santri. \n";
    echo "4. Delete Santri. \n";
    echo "Pilih Layanan ? ";
    $pilih=trim(fgets(STDIN));
    switch ($pilih) {
        case '1':
            $program->read();
            break;
        case '2':
            $program->insert();
            break;
        case '3':
            $program->update_nilai();
            break;
        case '4':
            $program->delete();
            break;
        default:
            echo "Pilihan Yang Anda Pilih Tidak Tersedia.\n";
            break;
    }
    echo "Apa Ada Lagi ? (y/n)";
    $pilih=trim(fgets(STDIN));
    if ($pilih== 'n') {
        $kondisi=false;
    }
}
?>