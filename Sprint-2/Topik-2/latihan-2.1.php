<?php
class Penjumlahan{

    public static function luas_persegi($p, $l){
        return ($p*$l);
    }
    public static function keliling_persegi($p, $l){
        return ($p+$l)*2;
    }
    public static function luas_segitiga($a, $t){
        return ($a*$t)/2;
    }
    public static function keliling_segitiga($s, $s2, $s3) {
        return ($s+$s2+$s3);
    }
    public static function luas_trapesium($a, $b, $t) {
        return ($a+$b)*$t/2;
    }
    public static function keliling_trapesium($s, $s2, $s3, $s4) {
        return ($s+$s2+$s3+$s4);
    }
    public static function luas_lingkaran($r){
        return 3.14*($r*$r);
    }
    public static function keliling_lingkaran($k){
        return 2*3.14*($k);
    }

}
$operasi= new Penjumlahan;

echo "==============================\n";
echo "|     Operasi Penjumlahan    |\n";
echo "==============================\n";
echo "1. Luas Persegi Panjang\n";
echo "2. Keliling Persegi Panjang\n";
echo "3. Luas Segitiga\n";
echo "4. Keliling Segitiga\n";
echo "5. Luas Trapesiaum\n";
echo "6. Keliling Trapesiaum\n";
echo "7. Luas Lingkaran\n";
echo "8. Keliling Lingkaran\n";
echo "Silahkan Pilih Layanan ? ";

$pilih = trim(fgets(STDIN));

switch ($pilih) {
    case 1:
        echo "=================================\n";
        echo "|         Luas Persegi          |\n";
        echo "=================================\n";
        echo "panjang : ";
        $panjang =(int)trim(fgets(STDIN));
        echo "lebar : ";
        $lebar = (int)trim(fgets(STDIN));
        echo "luas : ".Penjumlahan::luas_persegi($panjang, $lebar)."\n";
        break;
    case 2:
        echo "===================================\n";
        echo "|         Keliling Persegi        |\n";
        echo "===================================\n";
        echo "panjang : ";
        $panjang =(int)trim(fgets(STDIN));
        echo "lebar : ";
        $lebar = (int)trim(fgets(STDIN));
        echo "keliling : ".Penjumlahan::keliling_persegi($panjang, $lebar)."\n";
        break;
    
    case 3:
        echo "===================================\n";
        echo "|          Luas Segitiga          |\n";
        echo "===================================\n";
        echo "Alas : ";
        $alas= trim(fgets(STDIN));
        echo "Tinggi : ";
        $tinggi=trim(fgets(STDIN));
        echo "luasnya : ".Penjumlahan::luas_segitiga($alas, $tinggi)."\n";
        break;
    case 4:
        echo "====================================\n";
        echo "|         Keliling Segitiga        |\n";
        echo "====================================\n";
        echo "Sisi : ";
        $sisi = trim(fgets(STDIN));
        echo "Sisi 2 : ";
        $sisi2 = trim(fgets(STDIN));
        echo "Sisi 3 : ";
        $sisi3 = trim(fgets(STDIN));
        echo "kelilingnya : ".Penjumlahan::keliling_segitiga($sisi, $sisi2, $sisi3)."\n";
        break;
    case 5:
        echo "===================================\n";
        echo "|          Luas Trapesium         |\n";
        echo "===================================\n";
        echo "Sisi Atas : ";
        $sisi_atas= trim(fgets(STDIN));
        echo "Sisi Bawah";
        $sisi_bawah=trim(fgets(STDIN));
        echo "Tinggi : ";
        $tinggi=trim(fgets(STDIN));
        echo "luasnya : ".Penjumlahan::luas_trapesium($sisi_atas, $sisi_bawah, $tinggi)."\n";
        
        break;
    case 6:
        echo "=====================================\n";
        echo "|         Keliling Trapesium        |\n";
        echo "=====================================\n";
        echo "Sisi : ";
        $sisi = trim(fgets(STDIN));
        echo "Sisi 2 : ";
        $sisi2 = trim(fgets(STDIN));
        echo "Sisi 3 : ";
        $sisi3 = trim(fgets(STDIN));
        echo "Sisi 4 : ";
        $sisi4 = trim(fgets(STDIN));
        echo "kelilingnya : ".Penjumlahan::keliling_trapesium($sisi, $sisi2, $sisi3, $sisi4)."\n";
        break;
    case 7:
        echo "===================================\n";
        echo "|          Luas Lingkaran         |\n";
        echo "===================================\n";
        echo "r : ";
        $jari=trim(fgets(STDIN));
        echo "luasnya : ".Penjumlahan::luas_lingkaran($jari);
        echo "\n";
        break;
    case 8:
        echo "===================================\n";
        echo "|        Keliling Lingkaran       |\n";
        echo "===================================\n";
        echo "Jari-Jari : ";
        $keliling=trim(fgets(STDIN));
        echo "kelilingnya : ".Penjumlahan::keliling_lingkaran($keliling);
        echo "\n";
        break;
    default:
        echo "Layanan Tidak Tersedia.";
        break;
}
?>