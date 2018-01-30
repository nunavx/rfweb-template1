<?php
mysql_connect('localhost','root','Your Password');
mysql_select_db('website');
$query = mysql_query('SELECT * FROM berita ORDER BY id DESC');
while($output = mysql_fetch_assoc($query))
{ 
	$judul = '<h2>'.$output['title'].'</h2>';
	echo $judul;
	$topik = $output['content'];
	echo $topik .'<br / >';
	echo $output['date']).'<br / >';
	echo '<hr />'; 
}
?>
