<?php
class Pendataan{
    public $pendaftaran_santri=[
        [
            'Id'=> 'Id-001',
            'Nama'=>'Fadil',
            'Jurusan'=>'Mobile'
        ],
        [
            'Id'=> 'Id-002',
            'Nama'=>'Nasrul',
            'Jurusan'=>'Backend'
        ],
        [
            'Id'=> 'Id-003',
            'Nama'=>'Haka',
            'Jurusan'=>'Backend'
        ]

        ];
    public function pendaftaran(){
        $i = count($this->pendaftaran_santri);
        echo "Nama = ";
        $this->pendaftaran_santri[$i]['Nama']=trim(fgets(STDIN));
        echo "Jurusan = ";
        $this->pendaftaran_santri[$i]['Jurusan']=trim(fgets(STDIN));
        print_r($this->pendaftaran_santri);
    }
    public function hapus_data(){
        echo "Nama = ";
        $nama=trim(fgets(STDIN));
        foreach ($this->pendaftaran_santri as $key => $value) {
            if ($value['Nama']==$nama) {
                unset($this->pendaftaran_santri[$key]);
            }
        }
        print_r($this->pendaftaran_santri);

    }
    public function update(){
        echo "Nama = ";
        $nama=trim(fgets(STDIN));
        echo "Jurusan = ";
        $jurusan=trim(fgets(STDIN));

        foreach ($this->pendaftaran_santri as $key => $value) {
            if ($value['Nama']==$nama) {
                $this->pendaftaran_santri[$key]['Nama']=$nama;
                $this->pendaftaran_santri[$key]['Jurusan']=$jurusan;
            }
        }
        print_r($this->pendaftaran_santri);
    
    }
}
$data = new Pendataan;
echo "Layanan Pendaftaran Santri Baru 2020/2021\n";
echo "1. Pendaftaran Santri Baru\n";
echo "2. Hapus Pendaftaran Santri Baru\n";
echo "3. Update Pendaftaran Santri Baru\n";
echo "Silahkan Pilih Layanan ? ";
$pilih=trim(fgets(STDIN));

switch ($pilih) {
    case 1:
        $data->pendaftaran();
        break;
    case 2:
        $data->hapus_data();
        break;
    case 3:
        $data->update();
        break;
    default:
        echo "Layanan Tidak Tersedia.";
        break;
}
?>
