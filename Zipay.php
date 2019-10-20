<?php
include '1.php';
/*
    https://github.com/Aditia18
    Made by Aditia Alfiansyah
    Modified Insided Heartz
*/
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