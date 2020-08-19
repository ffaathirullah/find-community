<?php

include"koneksi.php";
extract($_POST);

if(isset($_POST['readrecords'])){

	$data =  '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Pembuat</th>
                      <th>Judul</th>
                      <th>Tanggal</th>		
                      <th>Level</th>
                      <th colspan = 3>Aksi</th>
                    </tr>'; 

	$displayquery = " SELECT * FROM event"; 
	$result = mysqli_query($koneksi,$displayquery);
	if(mysqli_num_rows($result) > 0){

		$number = 1;
		while ($row = mysqli_fetch_array($result)) {
			
			$data .= '<tr>  
				<td>'.$number.'</td>
				<td>'.$row['user'].'</td>
				<td>'.$row['judul'].'</td>
				<td>'.$row['tanggal'].'</td>
				<td>'.$row['level'].'</td>
				<td>
					<button onclick="GetUserDetails('.$row['id'].')" class="btn btn-success">Edit</button>
				</td>
				<td>
					<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>
				</td>
    		</tr>';
    		$number++;

		}
	} 
	 $data .= '</table>';
    	echo $data;

}

//////////////// update table//////////////

if(isset($_POST['hidden_user_id']))
{
    // get values
    $hidden_user_id = $_POST['hidden_user_id'];
    $level = $_POST['level'];
    $query = "UPDATE event SET level = '$level' WHERE id = '$hidden_user_id'";
    if (!$result = mysqli_query($koneksi, $query)) {
        exit(mysqli_error());
    }
}
/////////////Delete user record /////////

if(isset($_POST['deleteid']))
{

	$user_id = $_POST['deleteid']; 

	$deletequery = " delete from event where id ='$user_id' ";
	if (!$result = mysqli_query($koneksi,$deletequery)) {
        exit(mysqli_error());

}

}
?>