<?php 
// koneksi database
include 'koneksi.php';
$comment = $_POST['comment'];
$post = $_POST['id_post'];
$id = $_POST['id_user'];
$insert = mysqli_query($koneksi, "INSERT INTO comment VALUES('','$comment','$id','$post')");
header("location:detail.php?id=$post");
 ?>