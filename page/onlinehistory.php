<?php 
include_once 'config/config.php';

$conn=@mssql_connect($db_host,$db_user,$db_pass) or die(mssql_get_last_message()); 
$DB=@mssql_select_db($world,$conn) or die(mssql_get_last_message()); 

$hours = 24; // hours in dataset 
$barcolor = "blue"; // color for bars 
$lblcolor = "black"; // color for numbers on graph 
$xcolor = "black"; // color for X axis labels 
$maxhbar = 50; // height (pixels) for max bars 
$minhbar = 0;// height (pixels) for min bars 
$wdthbar = 12; // bars width 

$strSQL = "SELECT TOP {$hours} CONVERT(VARCHAR, dtDate, 108) AS hour, nMaxUser FROM tbl_log_usernum (nolock) ORDER BY serial DESC "; 
$res=@mssql_query($strSQL, $conn) or die(mssql_get_last_message()); 

$datax=array(); 
$datay=array(); 
$maxy = 0; 
$miny = 1000000; 

while ($data=@mssql_fetch_array($res)) 
{ 
$datax[] = substr($data['hour'], 0, 5); 
$datay[] = $data['nMaxUser']; 
if ($data['nMaxUser'] < $miny) $miny = $data['nMaxUser']; 
if ($data['nMaxUser'] > $maxy) $maxy = $data['nMaxUser']; 
} 
$xlen = sizeof($datax); 
$scaley = ($maxhbar - $minhbar) / ($maxy - $miny); 

echo "<table border=0 cellSpacing=1 cellPadding=0 ><tr>"; 
for ($i=($xlen-1);$i>=0;$i--) 
{ 
echo "<td valign=bottom>"; 
echo "<div style='position: absolute;'>"; 
echo "<font color={$lblcolor} size=1 face=tahoma style='writing-mode:tb-rl; filter:flipH flipV;'>".$datay[$i]."</font>"; 
echo "</div><table border=0 cellSpacing=0 cellPadding=0><tr><td height="; 
echo (int) ($minhbar + $scaley * $datay[$i]); 
echo "valign=top bgcolor={$barcolor} width={$wdthbar}></td></tr></table></td>"; 
} 
echo "<tr><td bgcolor={$lblcolor} colspan={$hours} height=1></td></tr>"; 
echo "<tr>"; 
for ($i=($xlen-1);$i>=0;$i--) 
{ 
echo "<td><div style='position: absolute;'><font color={$xcolor} size=1 face=tahoma style='writing-mode:tb-rl; filter:flipH flipV;'>".$datax[$i]."</font></div></td>"; 
} 
echo "</tr>"; 
echo "</td></table>"; 
?>