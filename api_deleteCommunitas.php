<?php 
include "koneksi.php";

	if (!isset($_POST['id'])) {
		echo '{ "status": "Error", "message": "Category ID, Sunda and Label reqired."}';
		exit();
	}

	$id = $_POST['id'];
	$sql = "DELETE FROM  communitas  WHERE id='$id'";
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