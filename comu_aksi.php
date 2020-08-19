<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$namaketua = $_POST['namaketua'];
$namakomunitas = $_POST['namakomunitas'];
$notelp = $_POST['notelp'];
$maps = $_POST['maps'];
$alamat = $_POST['alamat'];
$jenis = $_POST['jenis'];
$pembuat = $_POST['pembuat'];
$deskripsi = $_POST['deskripsi'];
$form = $_POST['form'];
$level = "user";
 $ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
// menginput data ke database
			
move_uploaded_file($file_tmp, 'file/'.$nama);
mysqli_query($koneksi,"insert into communitas(nama_ketua, nama_komunitas, no_telp, maps, alamat, jenis_komunitas, deskrisi, nama, form, id_pembuat) values('$namaketua','$namakomunitas','$notelp','$maps','$alamat','$jenis','$deskripsi','$nama','$form','$pembuat')");
 
// mengalihkan halaman kembali ke index.php
header("location:menu.php");
 
?>