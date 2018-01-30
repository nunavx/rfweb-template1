<?php
include_once 'config/config.php';

function statuscheck($serverip, $port) { 
$sockres = @fsockopen($serverip, $port, $errno, $errstr, 1); 
if (!$sockres) { 
return "<font color='red'><b>Off-Line</b></font>"; 
} else { 
@fclose($sockres); 
return "<font color='green'><b>On-Line</b></font>"; 
	} 
} 

echo "<b><font size=2 color=#000>"; 
echo "<div> "; 
echo "Login: " . statuscheck($serverip, "10001"); 
echo "</div> "; 
echo "<div> "; 
echo "Server:" . statuscheck($serverip, "27780"); 
echo "</div> "; 
?>