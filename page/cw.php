<!--Счетчик ЧипВара с настройкой-->
<?php 
$conf_gmt=0; //Поправка по GMT, если время на веб-сервере отличается от времени на игровом сервере. Если время совпадает - указываем 0 
$conf_ygmt=2; //GMT ВАШЕГО пояса. Украина +2, Россия +3 

$conf_cw1=5; //Время первого ЧВ 
$conf_cw2=13; //Время второго ЧВ 
$conf_cw3=21; //Время третьего ЧВ 

//Дальше трогать ничего не нужно 

$h=Date(H); 
$datem=date(i); 
$h=$h+$conf_gmt; 

if ($h>=25) { 
$h=$h-24; 
} 
if($h < $conf_cw2 && $h >= $conf_cw1) 
{ $hh=2;$hc=$conf_cw2; } 
if($h >= $conf_cw2 && $h < $conf_cw3) 
{ $hh=3;$hc=$conf_cw3; } 
if($h >= $conf_cw3 && $h <= 23) 
{ $hh=1;$hc=$conf_cw1; } 
if($h >= 00 && $h < $conf_cw1) 
{ $hh=1;$hc=$conf_cw1; } 
if($h >= $conf_cw1 && $h <= $conf_cw2) 
{ $hh=2;$hc=$conf_cw2; } 
if ($h==24) 
{ $hh=1;$hc=$conf_cw1; } 
if ($h==0) 
{ $hh=1;$hc=$conf_cw1; } 


$inh=($hc-$h)-2; 
$inm=60-$datem; 

$chipwar1="<div>".$hh." ChipWar at ".$hc.":00<br>"; 
$chipwar3="Time left: ".$inh.":".$inm."<br>Server time: ".$h.":".$datem."<br>(GMT +".$conf_ygmt.")<br><br>".$conf_cw1.":00 - ".$conf_cw2.":00 - ".$conf_cw3.":00</div>"; 

$chipwar=$chipwar1.$chipwar3; 

echo $chipwar; 
?>