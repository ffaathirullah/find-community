<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$firstname = $_POST['firstname'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirpass = $_POST['confirpass'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$level = "user";
 
// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$firstname','$username','$password','$confirpass','$email','$no_telp','$jenis_kelamin','$level')");
 
// mengalihkan halaman kembali ke index.php
header("location:menu.php");
 
?>