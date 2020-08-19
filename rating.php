<?php 
// koneksi database
include 'koneksi.php';
$post = $_POST['id_post'];
$id = $_POST['id_user'];
$raing = $_POST['points'];
$insert = mysqli_query($koneksi, "INSERT INTO rating VALUES('','$post','$id','$raing')");
$bebas = mysqli_query($koneksi, "SELECT AVG(rating) FROM rating where id_communitas='$post'");

header("location:menu.php");


 ?>