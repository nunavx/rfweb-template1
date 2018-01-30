<!-- TOP 30 по PvpPoint и патриархи рас -->
<?php 
//MSSQL settings 
include_once 'config/config.php';

$db_user = 'sa'; 
$db_pass = 'Xjjwknjt12'; 
$world = "RF_WORLD"; 
$db_host = "127.0.0.1\SQLEXPRESS"; 


# Private by Freelance Design Center 
# Script for GamerGrad Server 

$msconnect=mssql_connect($db_host,$db_user,$db_pass); 
$res = mssql_query("SELECT * FROM ".$world.".dbo.tbl_racebattle_log ORDER BY idx DESC "); 
$row = mssql_fetch_assoc($res); 

$resulty1 = mssql_query("SELECT Name,Lv FROM ".$world.".dbo.tbl_base WHERE Serial = '".$row[bossserial0]."'"); 
$Name0 = trim(@MSSQL_RESULT($resulty1,0, "Name")); 
$Name10 = trim(@MSSQL_RESULT($resulty1,0, "Lv")); 

$resulty1 = mssql_query("SELECT Name,Lv FROM rf_world.dbo.tbl_base WHERE Serial = '".$row[bossserial1]."'"); 
$Name1 = trim(@MSSQL_RESULT($resulty1,0,"Name")); 
$Name11 = trim(@MSSQL_RESULT($resulty1,0, "Lv")); 

$resulty1 = mssql_query("SELECT Name,Lv FROM ".$world.".dbo.tbl_base WHERE Serial = '".$row[bossserial2]."'"); 
$Name2 = trim(@MSSQL_RESULT($resulty1,0,"Name")); 
$Name12 = trim(@MSSQL_RESULT($resulty1,0, "Lv")); 

$resulty1 = mssql_query("SELECT PvpPoint FROM ".$world.".dbo.tbl_pvporderview WHERE Serial = '".$row[bossserial0]."'"); 
$Name50 = trim(@MSSQL_RESULT($resulty1,0,"PvpPoint")); 

$resulty1 = mssql_query("SELECT PvpPoint FROM ".$world.".dbo.tbl_pvporderview WHERE Serial = '".$row[bossserial1]."'"); 
$Name51 = trim(@MSSQL_RESULT($resulty1,0,"PvpPoint")); 

$resulty1 = mssql_query("SELECT PvpPoint FROM ".$world.".dbo.tbl_pvporderview WHERE Serial = '".$row[bossserial2]."'"); 
$Name52 = trim(@MSSQL_RESULT($resulty1,0,"PvpPoint")); 

echo "<font face=Lucinda size=2 font color=#80FF80><p><big>Представители расы</big></p>"; 
echo "<p>Федерация Беллато: <b>".$Name0. "<b> Lvl:" .$Name10. "<b> PvP:" .(int)$Name50.'</b></p>'; 
echo "<p>Альянс Кора: <b>".$Name1."<b> Lvl:" .$Name11."<b> PvP:" .(int)$Name51.'</b></p>'; 
echo "<p>Империя Акретия: <b>".$Name2. "<b> Lvl:" .$Name12."<b> PvP:" .(int)$Name52.'</b></p></font>'; 




$conn=mssql_connect($db_host,$db_user,$db_pass); 
$selected=mssql_select_db('RF_World', $conn); 

$query ='SELECT t1.Name,t1.Class,t1.Lv,t1.Gold, t1.Serial,t2.PvpPoint 
FROM tbl_base AS t1, tbl_pvporderview AS t2 
WHERE t1.Serial = t2.Serial and DeleteName = "*" and AccountSerial < "2000000000" 
ORDER BY t2.PvpPoint DESC, t1.Lv desc'; 

$result = mssql_query($query); 
echo ' 
<p>'; 
echo " 
<p>\n"; 
echo "\n"; 

echo 'Рейтинг по ПвП очкам'; 

echo ' 
<p>'; 
echo '<font face=Lucinda>'; 
echo '<center><table border=0 cellSpacing=3 align=center'; 
echo '<tr><td width="120"><center><font face=Lucinda size=2>Место</td><td><font face=Lucinda size=2><b>Игровой ник</td><td><font face=Lucinda size=2><b>Золото</td><td><font face=Lucinda size=2><b>Очки PvP</td><td><font face=Lucinda size=2><b>Класс</td><td><font face=Lucinda size=2><b>Уровень</a></td></b></font>'; 



for($i=0;$i < 30;++$i) 
{ 
$row = mssql_fetch_row($result); 

echo '<tr><td width=120 ><center><font face=Lucinda size=2>'; 
echo $i + 1; 
echo '</font></td><td width=100><font face=Lucinda size=2 color=#FF0013><b><tb>'; 
echo $row[0]; 
echo '</font></td><td width=100 ><font face=Lucinda size=2 color=#FF0013><b><tb>'; 
echo $row[3]; 
echo '</font></td><td width=100 ><font face=Lucinda size=2 color=#FF0013><b><tb>'; 
echo (int)$row[5]; 


echo '</B></font></tb></td><td width=200 ><font face=Lucinda size=2 font >'; 
if($row[1] == 0){ 
echo '<font face=Lucinda size=2 font color=#80FF80></font>'; 
} 
if($row[1] == ASB0){ 
echo 'Accretia Specialist'; 
} 
if($row[1] == CWB0){ 
echo 'Cora Warrior'; 
} 
if($row[1] == ARS1){ 
echo 'Accretia Striker'; 
} 
if($row[1] == BWS1){ 
echo 'Bellato Berserk'; 
} 
if($row[1] == BWF1){ 
echo 'Bellato Commando'; 
} 
if($row[1] == BWF2){ 
echo 'Bellato Miller'; 
} 
if($row[1] == BRF1){ 
echo 'Bellato Diversant'; 
} 
if($row[1] == BRF2){ 
echo 'Bellato Sniper'; 
} 
if($row[1] == BFF1){ 
echo 'Bellato Psionik'; 
} 
if($row[1] == BFF2){ 
echo 'Bellato Magician'; 
} 
if($row[1] == BSF1){ 
echo 'Bellato Driver'; 
} 
if($row[1] == BSF2){ 
echo 'Bellato Craftsman'; 
} 
if($row[1] == BWS2){ 
echo 'Bellato Barbarian'; 
} 
if($row[1] == BWS3){ 
echo 'Bellato Defender'; 
} 
if($row[1] == BRS1){ 
echo 'Bellato Observer'; 
} 
if($row[1] == BRS2){ 
echo 'Bellato Guard'; 
} 
if($row[1] == BRS3){ 
echo 'Bellato Spy'; 
} 
if($row[1] == BFS1){ 
echo 'Bellato mag(волшебник)'; 
} 
if($row[1] == BFS2){ 
echo 'Bellato medium'; 
} 
if($row[1] == BFS3){ 
echo 'Bellato Wonder(Чудотворец)'; 
} 
if($row[1] == BSS1){ 
echo 'Bellato Armor Rider'; 
} 
if($row[1] == BSS2){ 
echo 'Bellato Metal smith'; 
} 
if($row[1] == CRB0){ 
echo 'Cora Ranger'; 
} 
if($row[1] == AWF1){ 
echo 'Accretia Destroyer'; 
} 
if($row[1] == AWF2){ 
echo 'Accretia Gladiator'; 
} 
if($row[1] == ARF1){ 
echo 'Accretia Canonnair'; 
} 
if($row[1] == ARF2){ 
echo 'Accretia Spy(лазутчик)'; 
} 
if($row[1] == ASF1){ 
echo 'Accretia Engineer'; 
} 
if($row[1] == AWS1){ 
echo 'Accretia Punisher'; 
} 
if($row[1] == AWS2){ 
echo 'Accretia Hedge-hopper(Штурмовик)'; 
} 
if($row[1] == AWS3){ 
echo 'Accretia Landsknecht'; 
} 
if($row[1] == ARS2){ 
echo 'Accretia Dementer'; 
} 
if($row[1] == ARS3){ 
echo 'Accretia Phantom'; 
} 
if($row[1] == ASF1){ 
echo 'Accretia Block-mechanic'; 
} 
if($row[1] == ASF2){ 
echo 'Accretia Leader of block(Лидер звена)'; 
} 

if($row[1] == CFB0){ 
echo 'Cora Spiritualist'; 
} 
if($row[1] == CWF1){ 
echo 'Cora Knight'; 
} 
if($row[1] == CWF2){ 
echo 'Cora Champion'; 
} 
if($row[1] == CRF1){ 
echo 'Cora Archer'; 
} 
if($row[1] == CRF2){ 
echo 'Cora Hunter'; 
} 
if($row[1] == CFF1){ 
echo 'Cora Caster'; 
} 
if($row[1] == CFF2){ 
echo 'Cora Summoner'; 
} 
if($row[1] == CSF1){ 
echo 'Cora CraftsMan'; 
} 
if($row[1] == CWS1){ 
echo 'Cora Templar(храмовник)'; 
} 
if($row[1] == CWS2){ 
echo 'Cora Keeper'; 
} 
if($row[1] == CWS3){ 
echo 'Cora Dark Knight'; 
} 
if($row[1] == CRS1){ 
echo 'Cora Hireling(Наемник)'; 
} 
if($row[1] == CRS2){ 
echo 'Cora Apostatenator(отступник)'; 
} 
if($row[1] == CRS3){ 
echo 'Cora Assasin'; 
} 
if($row[1] == CFS1){ 
echo 'Cora Warlock'; 
} 
if($row[1] == CFS2){ 
echo 'Cora Dark Priest'; 
} 
if($row[1] == CFS3){ 
echo 'Cora Grazier'; 
} 
if($row[1] == CSS1){ 
echo 'Cora Artist'; 
} 
if($row[1] == CSB0){ 
echo 'Cora Specialist'; 
} 
if($row[1] == BWB0){ 
echo 'Bellato Warrior'; 
} 
if($row[1] == BRB0){ 
echo 'Bellato Ranger'; 
} 
if($row[1] == BFB0){ 
echo 'Bellato Spiritualist'; 
} 
if($row[1] == BSB0){ 
echo 'Bellato Specialist'; 
} 
if($row[1] == AWB0){ 
echo 'Accretia Warrior'; 
} 
if($row[1] == ARB0){ 
echo 'Accretia Ranger'; 
} 
if($row[1] == AFB0){ 
echo 'Accretia Spiritualist'; 
} 
echo '</b></font></td><td width=60 ><b><font face=Lucinda size=2>'; 
echo $row[2]; 
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