<?php
class Pendataan{
    public static $pendaftaran=[
        [
            'Nama'=>'Fadil',
            'Jurusan'=>'Mobile'
        ],
        [
            'Nama'=>'Romi',
            'Jurusan'=>'Backend'
        ],
        [
            'Nama'=>'Dian',
            'Jurusan'=>'Backend'
        ],
    ];
    public static function pendaftaran(){
        echo "=================================================\n";
        echo "|   Layanan Pendaftaran Data Santri Pondok IT   |\n";
        echo "=================================================\n\n";

        $i=count(self::$pendaftaran);
        echo "Nama = ";
        self::$pendaftaran[$i]['Nama']=trim(fgets(STDIN));
        echo "Jurusan = ";
        self::$pendaftaran[$i]['Jurusan']=trim(fgets(STDIN));
        print_r(self::$pendaftaran);
    }
}
class Pelayanan extends Pendataan{
    public function __construct($program){
        if ($program=="update") {
            $this->update();
        }
        elseif ($program=="delete") {
            $this->delete();
        }
    }
    public function update(){
        echo "============================================\n";
        echo "|   Layanan Update Data Santri Pondok IT   |\n";
        echo "============================================\n\n";

        $data=parent::$pendaftaran;
        echo "Nama = ";
        $nama=trim(fgets(STDIN));
        echo "Jurusan = ";
        $jurusan=trim(fgets(STDIN));
        foreach ($data as $key => $value) {
            if ($value['Nama']==$nama) {
                $data[$key]['Nama']=$nama;
                $data[$key]['Jurusan']=$jurusan;

            }
        }
        print_r($data);
        parent::$pendaftaran=$data;
    }
    public function delete(){
        echo "============================================\n";
        echo "|    Layanan Hapus Data Santri Pondok IT   |\n";
        echo "============================================\n\n";

        $data=parent::$pendaftaran;
        echo "Nama = ";
        $nama=trim(fgets(STDIN));
        foreach ($data as $key => $value) {
            if ($value['Nama']==$nama) {
                unset($data[$key]);

            }
        }
        $data=array_slice($data,0,count($data));
        print_r($data);
        parent::$pendaftaran=$data;
    }
    
}
$kondisi=true;
while ($kondisi) {
    echo "========================================================\n";
    echo "|  Layanan Administrasi Pendaftaran Santri Pondok IT   |\n";
    echo "========================================================\n\n";
    echo "1. Pendaftaran Santri Pondok IT. \n";
    echo "2. Update Santri Pondok IT. \n";
    echo "3. Hapus Data Pendaftaran Santri Pondok IT. \n";
    echo "Pilih Layanan ? ";
    $pilih=trim(fgets(STDIN));
    switch ($pilih) {
        case '1':
            Pendataan::pendaftaran();
            break;
        case '2':
            $data=new Pelayanan("update");
            break;
        case '3':
            $data=new Pelayanan("delete");
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