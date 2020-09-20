<?php
class Penjumlahan{

    public static function luas_persegi($p,$l){
        if ($p==0||$l==0) {
            throw new Exception("Bilangan Tidak Boleh '0' ");
            
        }
        return ($p*$l);
    }
    public static function keliling_persegi($p,$l){
        if ($p==0||$l==0) {
            throw new Exception("Bilangan Tidak Boleh '0' ");

        }
        return ($p+$l)*2;
    }
    public static function luas_segitiga($a,$t){
        if ($a==0||$t==0) {
            throw new Exception("Bilangan Tidak Boleh '0' ");

        }
        return ($a*$t)/2;
    }
    public static function keliling_segitiga($s,$s2,$s3){
        if ($s==0||$s2==0||$s3==0) {
            throw new Exception("Bilangan Tidak Boleh '0' ");
        }
        return ($s+$s2+$s3);
        
    }
    public static function luas_trapesium($a,$b,$t) {
        if ($a==0||$b==0||$t==0) {
            throw new Exception("Bilangan Tidak Boleh '0' ");

        }
        return ($a+$b)*$t/2;
    }
    public static function keliling_trapesium($s,$s2,$s3,$s4) {
        if ($s==0||$s2==0||$s3==0||$s4==0) {
            throw new Exception("Bilangan Tidak Boleh '0' ");

        }
        return ($s+$s2+$s3+$s4);
    }
    public static function luas_lingkaran($r){
        if ($r==0) {
            throw new Exception("Bilangan Tidak Boleh '0' ");

        }
        return 3.14*($r*$r);
    }
    public static function keliling_lingkaran($k){
        if ($k==0) {
            throw new Exception("Bilangan Tidak Boleh '0' ");

        }
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
        try {
            $hasil=Penjumlahan::luas_persegi($panjang,$lebar);
            echo "Luas Persegi Panjang = ".$hasil;
        } catch (Exception $ex) {
            echo "Eror Pada".$ex->getFile(). "\nPada Baris".$ex->getLine()."\n";
            echo $ex->getMessage();

        }
        
        break;
    case 2:
        echo "===================================\n";
        echo "|         Keliling Persegi        |\n";
        echo "===================================\n";
        echo "panjang : ";
        $panjang =(int)trim(fgets(STDIN));
        echo "lebar : ";
        $lebar = (int)trim(fgets(STDIN));
        try {
            $hasil=Penjumlahan::keliling_persegi($panjang, $lebar);
            echo "Luas Persegi Panjang = ".$hasil;
        } catch (Exception $ex) {
            echo "Eror Pada".$ex->getFile(). "\nPada Baris".$ex->getLine()."\n";
            echo $ex->getMessage();

        }
        break;
    
    case 3:
        echo "===================================\n";
        echo "|          Luas Segitiga          |\n";
        echo "===================================\n";
        echo "Alas : ";
        $alas= trim(fgets(STDIN));
        echo "Tinggi : ";
        $tinggi=trim(fgets(STDIN));
        try {
            $hasil=Penjumlahan::luas_segitiga($alas,$tinggi);
            echo "Luasnya = ".$hasil;
        } catch (Exception $ex) {
            echo "Eror Pada = ".$ex->getFile(). "\nPada Baris = ".$ex->getLine()."\n";
            echo $ex->getMessage();
        }
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
        try {
            $hasil=Penjumlahan::keliling_segitiga($sisi,$sisi2,$sisi3);
            echo "Keliling = ".$hasil;
        } catch (Exception $ex) {
            echo "Eror Pada = ".$ex->getFile(). "\nPada Baris = ".$ex->getLine()."\n";
            echo $ex->getMessage();
        }
        break;
    case 5:
        echo "===================================\n";
        echo "|          Luas Trapesium         |\n";
        echo "===================================\n";
        echo "Sisi Atas : ";
        $sisi_atas= trim(fgets(STDIN));
        echo "Sisi Bawah : ";
        $sisi_bawah=trim(fgets(STDIN));
        echo "Tinggi : ";
        $tinggi=trim(fgets(STDIN));
        try {
            $hasil=Penjumlahan::luas_trapesium($sisi_atas,$sisi_bawah,$tinggi);
            echo "Luasnya = ".$hasil;
        } catch (\Throwable $th) {
            echo "Eror Pada = ".$th->getFile(). "\nPada Baris = ".$th->getLine()."\n";
            echo $th->getMessage();
        }
        
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
        try {
            $hasil=Penjumlahan::keliling_trapesium($sisi,$sisi2,$sisi3,$sisi4);
            echo "Kelilingnya = ".$hasil;
        } catch (Exception $th) {
            echo "Eror Pada = ".$th->getFile(). "\nPada Baris = ".$th->getLine()."\n";
            echo $th->getMessage();
        }
        break;
    case 7:
        echo "===================================\n";
        echo "|          Luas Lingkaran         |\n";
        echo "===================================\n";
        echo "r : ";
        $jari=trim(fgets(STDIN));
        try {
            $hasil=Penjumlahan::luas_lingkaran($jari);
            echo "Luasnya = ".$hasil;
        } catch (Exception $th) {
            echo "Eror Pada = ".$th->getFile(). "\nPada Baris = ".$th->getLine()."\n";
            echo $th->getMessage();
        }
        break;
    case 8:
        echo "===================================\n";
        echo "|        Keliling Lingkaran       |\n";
        echo "===================================\n";
        echo "Jari-Jari : ";
        $keliling=trim(fgets(STDIN));
        try {
            $hasil=Penjumlahan::keliling_lingkaran($keliling);
        } catch (Exception $th) {
            echo "Eror Pada = ".$th->getFile(). "\nPada Baris = ".$th->getLine()."\n";
            echo $th->getMessage();
        }
        break;
    default:
        echo "Layanan Tidak Tersedia.";
        break;
}
?>