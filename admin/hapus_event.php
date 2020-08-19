<?php 

include 'koneksi.php';


$id =$_GET['id'];

mysqli_query($koneksi, " delete from event where id='$id'");

header("location:event.php");

 ?>