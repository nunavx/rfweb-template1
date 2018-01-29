<?php
require_once('page/includes/rf-class.php');
$rf = new rfgame();

//check RF Game server Online / Offline status

$status = $rf->statuscheck('127.0.0.1','10001','27780');

//RF game status
$status['gm_stat']; //return TRUE / FALSE
//login status
$status['lg_stat']; //return TRUE / FALSE

//how many player in the game

$total = $rf->user_status('C:\RF\ZoneServer\SystemSave\ServerDisplay.ini');

echo $total['total']; //total all user
echo $total['accretia'];
echo $total['belato'];
echo $total['cora'];
?>