<?php
class Pendataan{
    public $data_buku=[
        [
            'Isbn'      =>'T-001',
            'Judul Buku'=>'Tutorial Bernafas'
        ],
        [
            'Isbn'      =>'T-003',
            'Judul Buku'=>'Kaulah Pahlawanku'
        ],
        [
            'Isbn'      =>'T-006',
            'Judul Buku'=>'Pacar Rental'
        ]
    ];
    public $member=[
        [
            'UserID'    =>'M-01',
            'Nama'      =>'Usman'
        ],
        [

            'UserID'    =>'M-02',
            'Nama'      =>'Uus'
        ]
        ];
    //Kalau ada buku baru

    public function tambahanBuku(){//private hanya untuk kelas itu saja
        $i=count($this->data_buku);
        echo "Input Kode Buku = ";
        $this->data_buku[$i]['Isbn']= trim(fgets(STDIN));
        echo "Input Judul Buku = ";
        $this->data_buku[$i]['Judul Buku']= trim(fgets(STDIN));
        print_r ($this->data_buku);

    }

    public function tambahMember(){
        $i=count($this->member);
        echo "Input User Id =";
        $this->member[$i]['UserId']=trim(fgets(STDIN));
        echo "Nama member   =";
        $this->member[$i]['Nama']=trim(fgets(STDIN));
        print_r ($this->member);
    }    

}
class Peminjaman extends Pendataan 
{
    //Kalau ada peminjaman buku
    
        public $Daftar_pinjaman = [
            [
            'Name'              => 'Dian',
            'Judul Buku'        => 'Pencakar Langit',
            'Tanggal Pinjam '   => '01-05-2020',
            'Pengembalian'      => '07-05-2020'
            ]
        ];
        public $daftarKembali=[];

        public function peminjamanBUku(){
            $i=count($this->Daftar_pinjaman);
            echo "Nama Member     = ";
            $this->Daftar_pinjaman[$i]['Name']=trim(fgets(STDIN));
            echo "Judul Buku      = ";
            $this->Daftar_pinjaman[$i]['Judul Buku']=trim(fgets(STDIN));
            echo "Tanggal Pinjam  = ";
            $this->Daftar_pinjaman[$i]['Tanggal Pinjam']=trim(fgets(STDIN));
            echo "Pengembalian    =  ";
            $this->Daftar_pinjaman[$i]['Pengembalian']=trim(fgets(STDIN));
            print_r($this->Daftar_pinjaman);
        }
        public function pengembalianBuku(){
            $i=count($this->daftarKembali);
            echo "Nama Member     = ";
            $this->daftarKembali[$i]['Name']=trim(fgets(STDIN));
            echo "Judul Buku      = ";
            $this->daftarKembali[$i]['Judul Buku']=trim(fgets(STDIN));
            echo "Tanggal Pinjam  = ";
            $this->daftarKembali[$i]['Tanggal Pinjam']=trim(fgets(STDIN));
            echo "Pengembalian    =  ";
            print_r($this->daftarKembali);
          }
  

}

$Peminjaman=new Peminjaman;
$Pendataan= new Pendataan;
// $Peminjaman->pengembalianBuku();
echo "(\_/)===========================(\_/)\n";
echo "(-_-)|     Perpustakan Kita    |(-_-)\n";
echo "<\<\ =========================== />/>\n";
echo "1. Penambahan Buku\n";
echo "2. Daftar Member\n";
echo "3. Daftar Pemonjaman Buku\n";
echo "4. Pengembalian Buku\n";
echo "Silahkan Pilih Nomer ? ";
$pilih=trim(fgets(STDIN));
// 
switch ($pilih) {
    case 1:
        $Pendataan->tambahanBuku();
        break;
    case 2:
        $Pendataan->tambahMember();
        break;
    case 3:
        $Peminjaman->peminjamanBUku();
        break;
    case 4:
        $Peminjaman->pengembalianBuku();
        break;
    default:
        echo "Pilihan Tidak Tersedia";
        break;
}
echo "Apa Ada Yang Diperlukan Lagi"






?>