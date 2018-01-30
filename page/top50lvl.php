<?php 
include_once 'config/config.php';

$conn=mssql_connect($db_host,$db_user,$db_pass) or die("<center><b>Критическая ошибка</b><br>Невозможно подключиться к базе<br><br><a href=register.php><img src=retour.jpg border=0></a></center>"); 

@mssql_select_db($world, $conn) or die("<center><b>Критическая ошибка</b><br>База не существует, либо нет доступа<br><br><a href=register.php><img src=retour.jpg border=0></a></center>"); 


$result=mssql_query("SELECT top 50 Name,Lv,Race,Class FROM tbl_base ORDER BY Lv DESC "); 

$g=0; 
echo ' 
<table id=uo border=1 cellpadding=0 cellspacing=0 width="100%" height=15 bordercolor=red align=center> 
<tr id=uo> 
<td id=uo width="3%" align=center><font size=2><font color=#7A6A0C>#</font></td></font> 
<td id=uo width="10%" align=center><span lang="ru"><font size=2><font color=#7A6A0C><b>Name</b></font></span></td></font> 
<td id=uo width="5%" align=center><span lang="ru"><font size=2><font color=#7A6A0C><b>Race</b></font></span></td></font> 
<td id=uo width="10%" align=center><span lang="ru"><font size=2><font color=#7A6A0C><b>Class</b></font></span></td></font> 
<td id=uo width="5%" align=center class="sortedColumn"><span lang="ru"><font size=2><font color=#7A6A0C><b>Level</b></font></span></td></font> 
</tr>'; 

while ($rows=mssql_fetch_array($result)) 
{ 
$g++; 
if ($rows['Race']=="0") 
$Race="Bellato"; 
if ($rows['Race']=="2") 
$Race="Cora"; 
if ($rows['Race']=="4") 
$Race="Accretia"; 

if ($rows['Class']="BWB0") 
$Class="Warrior"; 
if ($rows['Class']="CWB0") 
$Class="Warrior"; 
if ($rows['Class']="AWB0") 
$Class="Warrior"; 

if ($rows['Class']="BRB0") 
$Class="Ranger"; 
if ($rows['Class']="BRB0") 
$Class="Ranger"; 
if ($rows['Class']="CRB0") 
$Class="Ranger"; 

if ($rows['Class']="BFB0") 
$Class="Spiritualist"; 
if ($rows['Class']="BFB0") 
$Class="Spiritualist"; 

if ($rows['Class']="BSB0") 
$Class="Specialist"; 
if ($rows['Class']="BSB0") 
$Class="Specialist"; 
if ($rows['Class']="CSB0") 
$Class="Specialist"; 

echo '<tr id=uo> 
<td id=uo width=1% align=center><font size=2>'.$g.'</font></td> 
<td id=uo width=7% align=center><font size=2>'.$rows['Name'].' 
<td id=uo width=7% align=center><font size=2>'.$Race.' 
<td id=uo width=7% align=center><font size=2>'.$Class.' 
<td id=uo width=7% align=center><font size=2>'.$rows['Lv']; 
echo '</font></td>'; 
} 

print "</tr>\n"; 
print "</tbody>\n</table>\n"; 
?>