<?php
$file = file ("E:/RF Online Project/Server Files/Auros Server File 28-5-2017/2.ZoneServer/2.ZoneServer/SystemSave/ServerDisplay.ini"); // change your SystemSave/ServerDisplay.ini path here!!
foreach($file as $line) 
{ 
if(strspn($line, "[") != 1) 
parse_str($line); 
} 

echo "<tr><td><b><font size=2 color=#000000>"; 
echo "<font color=#000> Total online: <font color=lime> $UserNum"; 
echo "<div> "; 
echo "<font color=#000> Accretia: <font color=lime> $A_Num"; 
echo "</div> "; 
echo "<div> "; 
echo "<font color=#000> Bellato: <font color=lime> $B_Num"; 
echo "</div> "; 
echo "<div> "; 
echo "<font color=#000> Cora: <font color=lime> $C_Num"; 
echo "</div> "; 

?>