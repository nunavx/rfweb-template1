</div>
<div class="post"><div class="top"/>

<style>

</style>
<?php

mysql_connect('localhost','root','xjjwknjt12');
mysql_select_db('website');
$query = mysql_query('SELECT * FROM berita ORDER BY id DESC');
while($output = mysql_fetch_assoc($query))
{ 
	$judul = '<h2>'.$output['title'].'</h2>';
	echo $judul;
	$topik = $output['content'];
	echo $topik .'<br / >';
	echo date('D-M-Y', $output['date']).'<br / >';
	echo '<hr />'; 
}
?>
</div>
<!-- news section -->
