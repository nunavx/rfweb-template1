<!--Показ текущих патриархов -->
<?php

include_once 'config/config.php';
# Private by Freelance Design Center 
# Script for GamerGrad Server 

$msconnect=mssql_connect($db_host,$db_user,$db_pass); 
$res = mssql_query("SELECT * FROM ".$world.".dbo.tbl_racebattle_log ORDER BY idx DESC "); 
$row = mssql_fetch_assoc($res); 
$resulty1 = mssql_query("SELECT Name FROM ".$world.".dbo.tbl_base WHERE Serial = '".$row[bossserial0]."'"); 
$Name0 = trim(@MSSQL_RESULT($resulty1,0,"Name")); 
$resulty1 = mssql_query("SELECT Name FROM ".$world.".dbo.tbl_base WHERE Serial = '".$row[bossserial1]."'"); 
$Name1 = trim(@MSSQL_RESULT($resulty1,0,"Name")); 
$resulty1 = mssql_query("SELECT Name FROM ".$world.".dbo.tbl_base WHERE Serial = '".$row[bossserial2]."'"); 
$Name2 = trim(@MSSQL_RESULT($resulty1,0,"Name")); 

echo "<p><big>Race Leader</big></p>"; 
echo "<p>Bellato Union: <b>".$Name0.'</b></p>'; 
echo "<p>Cora Alliance: <b>".$Name1.'</b></p>'; 
echo "<p>Accretia Empire: <b>".$Name2.'</b></p>'; 
?>