<?php
$con=mysqli_connect('localhost','root','xjjwknjt12','website');

if(isset($_GET['del']))
$id=$_GET['del'];

if(isset($_GET['data']))
{
switch($_GET['data'])
{
    case 'list_agenda':
    mysqli_query($con,"delete from agenda where id='$id'");
    header("location:index.php?page=list_agenda");
    break;
        
    case 'kat_berita':
    mysqli_query($con,"delete from kat_berita where id_kategori='$id'");
    header("location:index.php?page=kat_berita");
    break;
        
    case 'list_berita':
    $data=mysqli_fetch_row(mysqli_query($con,"select gambar from berita where id='$id'"));
    unlink("../img/$data[0]");
    mysqli_query($con,"delete from berita where id='$id'");
     header("location:index.php?page=list_berita");
    break;
    
    case 'list_dokumen':
    mysqli_query($con,"delete from dokumen where id='$id'");
    unlink("../dokumenPdf/".$id.".pdf");
    header("location:index.php?page=list_dokumen");
    break;
    
    case 'list_hukum':
    mysqli_query($con,"delete from hukum where id='$id'");
    unlink("../hukumPdf/".$id.".pdf");
    header("location:index.php?page=list_hukum");
    break;
    
    case 'list_pengumuman':
    $data=mysqli_fetch_row(mysqli_query($con,"select konten from pengumuman where id='$id'"));
    unlink("../pengImg/$data[0]");
    mysqli_query($con,"delete from pengumuman where id='$id'");
    header("location:index.php?page=list_pengumuman");
    break;
    
    case 'list_image':
    $data=mysqli_fetch_row(mysqli_query($con,"select konten from galeri where id='$id'"));
    unlink("../galeri/$data[0]");
    mysqli_query($con,"delete from galeri where id='$id'");
    header("location:index.php?page=list_image");
    break;
}
}
?>