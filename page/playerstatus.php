<?
include_once 'config/config.php';

$file = file ("E:/RF Online Project/Server Files/Auros Server File 28-5-2017/2.ZoneServer/2.ZoneServer/SystemSave/ServerDisplay.ini"); 
foreach($file as $line) 
{ 
if(strspn($line, "[") != 1) 
parse_str($line); 
} 

function statuscheck($serverip, $port) { 
$sockres = @fsockopen($serverip, $port, $errno, $errstr, 1); 
if (!$sockres) { 
	return "<img src=/images/off.gif>"; 
}
else { 
	@fclose($sockres); 
	return "<img src=/images/on.gif>"; 
} 
} 

//MSSQL settings 

$conn=mssql_connect($db_host,$db_user,$db_pass); 
$selected=mssql_select_db($world, $conn); 


$query ='SELECT t1.Name,t1.Lv, t1.Serial,t2.PvpPoint,t2.[Kill],t2.Death,t3.OnlineStatus,t3.Map 
FROM tbl_base AS t1, tbl_pvporderview AS t2, tbl_general AS t3 
WHERE t1.Serial = t2.Serial and t2.Serial = t3.Serial and DeleteName = "*" and AccountSerial < "2000000000" and t3.OnlineStatus>=dateadd(minute,-5,getdate()) 
ORDER BY t2.PvpPoint DESC, t1.Lv desc'; 


$query2 ='SELECT t1.Name,t1.Lv, t1.Serial,t2.PvpPoint,t2.[Kill],t2.Death,t3.OnlineStatus 
FROM tbl_base AS t1, tbl_pvporderview AS t2, tbl_general AS t3 
WHERE t1.Serial = t2.Serial and t2.Serial = t3.Serial and DeleteName = "*" and AccountSerial < "2000000000" and t3.OnlineStatus>=dateadd(minute,-5,getdate()) 
ORDER BY t2.PvpPoint DESC, t1.Lv desc'; 

//$result=mssql_query("SELECT TOP 50 Serial,TotalPlayMin,PvpPoint,GuildSerial FROM Rf_world.dbo.tbl_general where OnlineStatus>=dateadd(minute,-5,getdate())ORDER BY PvpPoint DESC"); 
$result = mssql_query($query); 
$result2 = mssql_query($query2); 

$top_pvp_users=array(); 
for($x=0;$top_pvp_users[$x]=mssql_fetch_assoc($result2);$x++) 
echo ' 
<p>'; 
echo " 
<p>\n"; 
echo "\n"; 

echo ' 
<p>'; 
echo '<font face=Lucinda>'; 
echo '<center><table border=2 border-style= solid bordercolor=lime cellSpacing=0 align=center'; 
echo '<tr><td width="100" ><center><font face=Lucinda size=2 color=#768a62><b>Кора</td></b><td width="100" ><center><font face=Lucinda size=2 color=#aa9286><b>Акретия</td><td width="100" ><center><font face=Lucinda size=2 color=#768a62><b>Беллато</td></b></font>'; 

{ 
echo '<tr><td width=100 ><center><font face=Lucinda size=2 color=#86b2ba>'; 
echo $C_Num; 
echo '</font></td><td width=100><center><font face=Lucinda size=2 color=#86b2ba><b><tb>'; 
echo $A_Num; 
echo '</font></td><td width=100 ><center><font face=Lucinda size=2 color=#86b2ba><b><tb>'; 
echo $B_Num; 
} 

echo '</table>'; 
echo ''; 
echo ' 
<p>'; 

echo ' 
<p>'; 
echo '<font face=Lucinda>'; 
echo '<center><table border=2 border-style= solid bordercolor=lime cellSpacing=0 align=center'; 
echo '<tr><td width="100" ><center><font face=Lucinda size=2 color=#768a62>Место</td><td><font face=Lucinda size=2 color=#aa9286><b>Ник</td><td><font face=Lucinda size=2 color=#768a62><b>Очки PvP</td><td><font face=Lucinda size=2 color=#aa9286><b>Kill</td><td><font face=Lucinda size=2 color=#768a62><b>Уровень</a></td></b></font>'; 



for($i=0;$i < count($top_pvp_users)-1;++$i) 
{ 
$row = mssql_fetch_row($result); 

echo '<tr><td width=100 ><center><font face=Lucinda size=2 color=#86b2ba>'; 
echo $i + 1; 
echo '</font></td><td width=100><font face=Lucinda size=2 color=#86b2ba><b><tb>'; 
echo $row[0]; 
echo '</font></td><td width=100 ><font face=Lucinda size=2 color=#86b2ba><b><tb>'; 
echo (int)$row[3]; 
echo '</font></td><td width=100 ><font face=Lucinda size=2 color=#86b2ba><b><tb>'; 
echo $row[4]; 


echo '</b></font></td><td width=100 ><b><font face=Lucinda size=2 color=#86b2ba>'; 
echo $row[1]; 
echo'</td></tr>'; 

echo '<tr><td height=1></td><td></td><td ></td><td ></td><td><td ><td ></td>'; 
} 
echo '</table>'; 
echo ''; 
echo ' 
<p>'; 

echo ''; 
echo ''; 
echo '<br>'; 

$conn=mssql_close(); 
?>