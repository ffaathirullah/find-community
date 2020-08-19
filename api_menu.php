<?php
	require "koneksi.php";
	
	//Fetch categories from database
	$result = mysqli_query($koneksi, "SELECT * FROM communitas");

	//Initialize array variable
	$dbdata = array();

	//Fetch into associative array
	while ($row = mysqli_fetch_assoc($result))  {
		$dbdata[]=$row;
	}

	//Print array in JSON format
	echo json_encode($dbdata);
?>