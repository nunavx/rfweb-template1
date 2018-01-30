<?/*    Create by FDcore Srudio in 2009 year;        Scrupt by NetSoul        License http://fdcore.ru/license.html*/
include_once 'config/config.php';

$file='E:/RF Online Project/Server Files/Auros Server File 28-5-2017/2.ZoneServer/2.ZoneServer/SystemSave/ServerState.ini';

function read($line){    
global $file;    
$ini=file_get_contents($file);
$ini_line=explode("\r\n",$ini);
$returned=explode("=",$ini_line[$line]);    
return $returned[1];}function percent($val){    
global $file;    
$starthp=read(41);return 
$c=round($val/($starthp/1000)/10);}
$acc        =    percent(read(63));
$bcc        =    percent(read(61));
$ccc        =    percent(read(62));
$hunter    =    read(54);

list($hunter)=mssql_fetch_array(mssql_query("SELECT Name FROM rf_world.dbo.tbl_base WHERE Serial=$hunter"));

$res = mssql_query("SELECT * FROM RF_WORLD.dbo.tbl_racebattle_log ORDER BY idx DESC "); 
$row = mssql_fetch_assoc($res); 
$result = mssql_query("SELECT winrace FROM RF_WORLD.dbo.tbl_racebattle_log WHERE winrace = '".$row[winrace]."'");
$winner = $row[winrace];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Чипы</title>
<style type="text/css">
.container {
	display:block;background-color:red;width:100px;height:20px;-moz-border-radius: 5px;-webkit-border-radius: 5px;opacity: 0.5;}.percent{background-color:lime;display:block;height:20px;-moz-border-radius: 5px;-webkit-border-radius: 5px;}
	</style>
	</head>
<body>ACCRETIA <?=$acc?>%    
<div class="container">
<div class="percent" style="width:<?=$acc?>px;">
</div></div>BELLATO <?=$bcc?>%        
<div class="container">
<div class="percent" style="width:<?=$bcc?>px;">
</div></div>CORA <?=$ccc?>%            
<div class="container"><div class="percent" style="width:<?=$ccc?>px;">
</div></div><p>Win Race: <?=$winner?></p>
</div></div><p>CHIP BREAKER: <?=$hunter?></p>
</body><!-- this free script by fdcore studio-->
</html>