<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$namaketua = $_POST['namaketua'];
$namakomunitas = $_POST['namakomunitas'];
$notelp = $_POST['notelp'];
$maps = $_POST['maps'];
$alamat = $_POST['alamat'];
$jenis = $_POST['jenis'];
$pembuat = $_POST['pembuat'];
$deskripsi = $_POST['deskripsi'];
$form = $_POST['form'];
 $ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
// menginput data ke database
			
move_uploaded_file($file_tmp, 'file/'.$nama);
mysqli_query($koneksi,"UPDATE communitas set nama_ketua ='$namaketua', nama_komunitas='$namakomunitas', no_telp='$notelp', maps = '$maps', alamat = '$alamat', jenis_komunitas ='$jenis', deskrisi='$deskripsi', nama='$nama', form ='$form' where id = '$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:komunitasku.php");
 
?>