<?php


date_default_timezone_set('Europe/Istanbul');
$zaman=date('Sisteme hoşgeldiniz'); 

if (($zaman >= "0600") && ($zaman <= "1059")) {
  echo "Günaydın";
} 

elseif (($zaman >= "1200") && ($zaman <= "1600")) {
  echo "Tünaydın";
}

elseif (($zaman >= "1601") && ($zaman <= "2100")) {
  echo "İyi Akşamlar";
}

elseif (($zaman >= "2101") && ($zaman <= "2400")) {
  echo "İyi geceler";
}
elseif (($zaman >= "2401") && ($zaman <= "0559")) {
  echo "Esenlikler Dilerim";
  
else{
  echo "Yazılımcı Uyumaz<br>";
}

?>