<?php

$koneksi = mysqli_connect("localhost","root","","pt");


if (mysqli_connect_error()) {
	# code...
	echo "koneksi gagal ke database : " .mysqli_connect_error();
}
?>