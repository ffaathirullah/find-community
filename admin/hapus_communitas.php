<?php 

include 'koneksi.php';


$id =$_GET['id'];

mysqli_query($koneksi, " delete from communitas where id='$id'");

header("location:komunitas.php");

 ?>