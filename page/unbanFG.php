<?php 
include_once 'config/config.php';

$msconnect=mssql_connect("$db_host","$db_user","$db_pass"); 

function unban() 
{ 
$sql = "DELETE FROM rf_user.dbo.tbl_UserBan WHERE nPeriod = 24"; 
$res = mssql_query ($sql); 
if ($res) $text.="Unban Success"; else $text.= "Error!"; 
return $text; 
} 
echo unban();
?>