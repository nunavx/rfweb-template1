<?php
function rf_server_test($name,$ip,$port){ 

$fp=fsockopen($ip, $port, &$errno, &$errmsg,1); 
if(!$fp){ 

if(stristr($errmsg,'refused')){ 
	return "$name: $errmsg. "; 
}
else{ 
	return "$name: $errmsg. "; 
}; 
}

else{ 
	return "$name: Online."; 
};

}; 

//--SERVER INFORMATION-- 
//////////////////////-- 
$server_names=array('Patch Server', 'Login Server', 'Novus Server', 'GameCP Server'); 
$server_ips=array('127.0.0.1','127.0.0.1','127.0.0.1','127.0.0.1'); 
$server_ports=array('8080','10001','27780','80'); 

//--HTML BELOW HERE-- 
//////////////////////-- 
echo ""; 
echo ""; 

echo "Patch Servers 
"; 
echo rf_server_test($server_names[0],$server_ips[0],$server_ports[0]); 
echo " 
"; 
echo "<br/>Login Servers 
"; 
echo rf_server_test($server_names[1],$server_ips[1],$server_ports[1]); 
echo " 
"; 
echo "<br/>Game Servers 
"; 
echo rf_server_test($server_names[2],$server_ips[2],$server_ports[2]); 
echo " 
"; 
echo "<br/>Web Servers 
"; 
for($i=3;$i<4;$i++){ 
echo rf_server_test($server_names[$i],$server_ips[$i],$server_ports[$i]); 
}; 
echo ""; 
?>