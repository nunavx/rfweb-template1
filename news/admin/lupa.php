<?php
    
$con=mysqli_connect('localhost','root','xjjwknjt12','website');

$data=mysqli_fetch_row(mysqli_query($con,"select * from login"));

$headers = "From: Pusat Ilmu noreply@ilmu-detil.blogspot.com\r\n";
            @mail("$data[3]","informasi login","berikut data login untuk website ilmu-detil.blogspot.com USERNAME= $data[1], PASSWORD= $data[2]", $headers);

header("location:admlogin.php?qwi=r");

?>