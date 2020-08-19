<?php 
include "koneksi.php";

	if (!isset($_POST['namaketua']) || !isset($_POST['namakomunitas']) || !isset($_POST['notelp']) || !isset($_POST['maps']) || !isset($_POST['alamat']) || !isset($_POST['jenis']) || !isset($_POST['pembuat']) || !isset($_POST['deskripsi']) || !isset($_POST['form'])) {
		echo '{ "status": "Error", "message": "Category ID, Sunda and Label reqired."}';
		exit();
	}

$namaketua = $_POST['namaketua'];
$namakomunitas = $_POST['namakomunitas'];
$notelp = $_POST['notelp'];
$maps = $_POST['maps'];
$alamat = $_POST['alamat'];
$jenis = $_POST['jenis'];
$pembuat = $_POST['pembuat'];
$deskripsi = $_POST['deskripsi'];
$form = $_POST['form'];

	$sql = "insert into communitas(nama_ketua, nama_komunitas, no_telp, maps, alamat, jenis_komunitas, deskrisi, form, id_pembuat) values('$namaketua','$namakomunitas','$notelp','$maps','$alamat','$jenis','$deskripsi','$form','$pembuat')";

	if (mysqli_query($koneksi, $sql)) {
		echo '{"status": "Succes", "wordId": ' .mysqli_insert_id($koneksi) . '}';
	}
	else {
		echo '{"status": "Error", "message": "' .mysqli_error($koneksi) . '"}';
	}

 ?>
