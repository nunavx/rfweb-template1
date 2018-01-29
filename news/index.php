<?php
mysql_connect('localhost','root','your password');
mysql_select_db('website');
$query = mysql_query('SELECT * FROM berita ORDER BY id DESC');
while($output = mysql_fetch_assoc($query))
{
	echo $output['title'].'<br />';
	echo $output['content'].'<br / >';
	echo date('D-M-Y', $output['date']).'<br / >';
	echo '<hr />'; 
}
?>
