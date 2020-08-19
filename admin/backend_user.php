<?php

include"koneksi.php";
extract($_POST);

if(isset($_POST['readrecords'])){

	$data =  '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Level</th>
                      <th>Email</th>
                      <th>No Telp</th>
                      <th>Aksi</th>

                    </tr>'; 

	$displayquery = " SELECT * FROM user"; 
	$result = mysqli_query($koneksi,$displayquery);
	if(mysqli_num_rows($result) > 0){

		$number = 1;
		while ($row = mysqli_fetch_array($result)) {

			$sites [] = array('username' => $row['username'],'level' => $row['level'] ,'email' => $row['email'],'no_telp' => $row['no_telp']);

		$formattedData = json_encode($row);
        //set the filename
        $filename = 'user.json';

        //open or create the file
        $handle = fopen($filename,'w+');

        //write the data into the file
        fwrite($handle,$formattedData);

            //close the file
        fclose($handle);
    
}
}
			// 5. PARSING DATA SQL -> XML Document : print_r($sites);
		$document = new DOMDocument();
		$document->formatOutput = true;

		$root = $document->createElement( "data" );
		$document->appendChild( $root );

		foreach( $sites as $laporan )
		{
			$block = $document->createElement( "datauser" );

			$username = $document->createElement( "username" );
			$username->appendChild(
			$document->createTextNode( $laporan['username'] )
			);
			$block->appendChild( $username );

				$level = $document->createElement( "level" );
			$level->appendChild(
			$document->createTextNode( $laporan['level'] )
			);
			$block->appendChild( $level );

			$email = $document->createElement( "email" );
			$email->appendChild(
			$document->createTextNode( $laporan['email'] )
			);
			$block->appendChild( $email );

			$no_telp = $document->createElement( "no_telp" );
			$no_telp->appendChild(
			$document->createTextNode( $laporan['no_telp'] )
			);
			$block->appendChild( $no_telp );
			
			

			$root->appendChild( $block );
		}

			// 6. MENYIMPAN DATA DALAM BENTUK FILE linksp.xml
			$document->save("nama.xml");
		



        $json = file_get_contents('user.json');

        //Decode JSON
		$json_data = json_decode($json,true);
					
			
			$data .= '<tr>  
				<td>'.$json_data['username'].'</td>
				<td>'.$json_data['level'].'</td>
				<td>'.$json_data['email'].'</td>
				<td>'.$json_data['no_telp'].'</td>
				<td>
					<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>
				</td>
    		</tr>';
    		

		
}
	
	 $data .= '</table>';
    	echo $data;


///add user
if(isset($_POST['firstname']) &&  isset($_POST['lastname']) )
	{
		$query = " INSERT INTO user( username, password, level, email, no_telp) VALUES('$firstname', '$lastname','admin','admin@gmail.com','08990360375') ";
		if($result = mysqli_query($koneksi,$query)){
			exit(mysqli_error());
		}else{
			echo "1 record added";
		}


	}


//////////////// update table//////////////

/////////////Delete user record /////////

if(isset($_POST['deleteid']))
{

	$user_id = $_POST['deleteid']; 

	$deletequery = " delete from user where id ='$user_id' ";
	if (!$result = mysqli_query($koneksi,$deletequery)) {
        exit(mysqli_error());

}

}
?>