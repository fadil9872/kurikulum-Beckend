<?php
$students = [
  [
    'Nama' => 'Udin',
    'Nik'  => 'T001',
    'Jurusan' =>'Programmer',
    'Divisi' => 'Backend',
    'Usia' => '74'
  ],
  [
    'Nama' => 'Umair',
    'Nik'  => 'T003',
    'Jurusan' =>'Programmer',
    'Divisi' => 'Graphic Design',
    'Usia' => '19'
  ]
];
function divisi($arr){
    
}
function usia_muda($arr){
    foreach ($arr as $key => $value) {
    }
}
echo "Urutkan Dari yang Mana ? ";
$pilihan=trim(fgets(STDIN));
switch ($pilihan) {
    case 3:
        usia_muda($students);
        break;
    
    default:
        echo "Maaf Pilihan Anda Tidak Tersedia.";
        break;
}

