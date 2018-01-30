<!--Показываем забаненых.-->
<? 
include_once 'config/config.php';

$conn=mssql_connect($db_host,$db_user,$db_pass) or die("<center><b>Критическая ошибка</b><br>Невозможно подключиться к базе<br></center>"); 
@mssql_select_db($user, $conn) or die("<center><b>Критическая ошибка</b><br>База не существует, либо нет доступа<br></center>"); 

if(!isset($_GET['type'])){ 
$type = "> 1"; 
} elseif(isset($_GET['type']) && $_GET['type'] == "temporary"){ 
$type = "< 999"; 
} elseif(isset($_GET['type']) && $_GET['type'] == "permanent"){ 
$type = "> 998"; 
} 

$data = mssql_query("SELECT * FROM tbl_UserBan WHERE nPeriod $type ORDER BY dtStartDate DESC") or die('SELECT INVALID'); 
?> 

<table width="100%" border="0" cellspacing="2" cellpadding="1" align="center"> 
<tr bgcolor="#fff"><td width="15%">Account</td> 
<td width="22%">Start</td> 
<td width="13%">Term</td> 
<td width="13%" align="center">Caused</td> 
<td width="21%">Reason</td> 
<td width="10%">Changed</td> 
</tr> 
<? 
$i = 0; 
$c1 = "#fff"; 
$c2 = "#fff"; 
while ($row = mssql_fetch_row($data)){ 

$account_query = mssql_query("SELECT [Name] 
FROM [rf_world].[dbo].[tbl_base] WHERE [rf_world].[dbo].[tbl_base].[AccountSerial] = $row[0] and DCK='0'"); 
$account = mssql_fetch_row($account_query); 
if(!empty($account[0])){ 
$color = (($i % 2) == 0) ? $c1 : $c2 ; 
$i++ ; 
echo "<tr bgcolor='".$color."'> 
<td>$account[0]</td> 
<td>$row[1]</td> 
<td>"; 
switch ($row[2]){ 
case (999): 
$period = "Permanent"; 
break; 

case (336): 
$period = "2 Weeks"; 
break; 

case (168): 
$period = "1 Week"; 
break; 

case (23): 
$period = "1 Day"; 
break; 
case (24): 
$period = "1 Day"; 
break; 
case (12): 
$period = "12 Hours"; 
break; 
case (6): 
$period = "6 Hours"; 
break; 
case (1): 
$period = "1 Hour"; 
break; 
} 
echo $period; 
echo "</td> 
<td align=\"center\">"; 
if($row[3] == 0) { 
echo "Account"; 
} 
else echo "Chat"; 
echo "</td> 
<td>$row[4]</td> 
<td>$row[5]</td> 
</tr>"; 
} 
} 
?> 