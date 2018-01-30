<?php
//MSSQL settings
$serverip = '127.0.0.1';
$db_host = '127.0.0.1\SQLEXPRESS';	// SQL HOST (change it to your IP ex : 127.0.0.1)
$db_user = 'sa';	// SQL ID
$db_pass = 'your password';	// SQL PASSWORD (change it to your password mssql)
$zone_port = "27780";
$login_port = "10007";
$user_manipulate = "10";
$user = "RF_USER";
$world = "RF_WORLD";
$billing = "BILLING";
$user_manipulate = "10";
$conn = mssql_connect($db_host,$db_user,$db_pass);
?>