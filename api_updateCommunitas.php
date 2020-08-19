<?php 
include "koneksi.php";

	if (!isset($_POST['id']) || !isset($_POST['namaketua']) || !isset($_POST['namakomunitas']) || !isset($_POST['notelp']) || !isset($_POST['maps']) || !isset($_POST['alamat']) || !isset($_POST['jenis']) || !isset($_POST['pembuat']) || !isset($_POST['deskripsi']) || !isset($_POST['form'])) {
		echo '{ "status": "Error", "message": "Category ID, Sunda and Label reqired."}';
		exit();
	}

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

	$sql = "UPDATE communitas set nama_ketua ='$namaketua', nama_komunitas='$namakomunitas', no_telp='$notelp', maps = '$maps', alamat = '$alamat', jenis_komunitas ='$jenis', deskrisi='$deskripsi', form ='$form' where id = '$id'";
	if (mysqli_query($koneksi, $sql)) {
		if (mysqli_affected_rows($koneksi) > 0) {
			echo '{"status": "Succes"}';
		}
		else {
			echo '{"status": "Error", "message": "No word with corresponding ID."}';
		}
	}
	else {
		echo '{"status": "Error", "message": "' .mysqli_error($koneksi) . '"}';
	}
	?>