<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$user = $_POST['nama'];
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$jenis = $_POST['jenis'];
$level = 'biasa';
$deskripsi = $_POST['deskripsi'];
$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
// menginput data ke database
			
move_uploaded_file($file_tmp, 'file/'.$nama);
mysqli_query($koneksi,"insert into event(user, judul,tanggal,jenis,deskripsi,nama,level) values('$user','$judul','$tanggal','$jenis','$deskripsi','$nama','$level')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>