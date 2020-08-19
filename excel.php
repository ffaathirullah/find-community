<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel Dengan PHP - www.malasngoding.com</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Anggota.xls");
	?>

	<center>
		<h1>Berikut Data Anggota Komunitas <br/> PT. FindCommunity Sinergi</h1>
	</center>

	<table border="1">
		
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>No.Telp</th>
			<th>Jenis Kelami</th>
		</tr>
		<?php
		include 'koneksi.php';
		$id =$_GET['id'];
		$no = 1;
		$data = mysqli_query($koneksi, "select a.firstname,a.email,a.no_telp,a.jenis_kelamin from user a , communitas u,bergabung b WHERE a.id = b.id_user AND u.id = b.id_communitas AND b.id_communitas = '$id'");
		 while ($d = mysqli_fetch_assoc($data)) {
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['firstname']; ?></td>
			<td><?php echo $d['email']; ?></td>
			<td><?php echo $d['no_telp']; ?></td>
			<td><?php echo $d['jenis_kelamin']; ?></td>
		</tr>
		<?php 
	}
		 ?>
	</table>
</body>
</html>