<?php 
// koneksi database
include 'koneksi.php';

$post = $_POST['id_post'];
$id = $_POST['id_user'];
$insert = mysqli_query($koneksi, "INSERT INTO bergabung VALUES('','$post','$id')");

$count = mysqli_query($koneksi, "SELECT * FROM bergabung WHERE id_communitas ='$post'");
$bebas = mysqli_num_rows($count);
$update = mysqli_query($koneksi, "update communitas set jml_anggota='$bebas' where id='$post'");
header("location:menu.php");


 ?>