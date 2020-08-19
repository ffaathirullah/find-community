<?php

//aktif session

session_start();


include 'koneksi.php';

//ngambil data dari form login

$username = $_POST['username'];
$password = $_POST['password'];


$login = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

//apakah user di temukan ( cek )

if ($cek > 0) {
 	$data = mysqli_fetch_assoc($login);

if(isset($_POST['rememberme'])) {
                    setcookie('login', $hasil['username'], time() + 3600);
                    setcookie('level', $hasil['level'], time() + 3600);
                    setcookie('id', $hasil['id_user'], time() + 3600);
                    setcookie('key', hash('sha256', $hasil['username']), time() + 3600);
                }
 	//admin
 	if ($data['level']=="admin") {
 		//session
 		$_SESSION['username'] = $username;
 		$_SESSION['level'] = 'admin';
 		//alihkan
 		header("location:admin/");

 	}elseif ($data['level']=="user") {
 		$_SESSION['username'] = $username;
 		$_SESSION['level'] = 'user';
 		//alihkan
 		header("location:menu.php");
 	}



 	else{
 	 header("location:login.php?pesan=gagal");
 }
}else{
 	 header("location:login.php?pesan=gagal");
 }

 ?>
