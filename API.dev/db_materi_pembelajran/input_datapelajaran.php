<?php 
 include './koneksi/config.php';

	$response = array(); 
	
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$mp = $_POST['vsmp'];	
		$ttljp = $_POST['vsttljp'];	
		$semester = $_POST['vssemester'];	
		$keterangan = $_POST['vsketerangan'];
        
			//trying to save the file in the directory 
			try{
				//saving the file 
				$sql = "INSERT INTO tbl_pembelajaran (`mata_pelajaran`, `total_jp`, `semester`, `keterangan`) VALUES ('$mp', '$ttljp', '$semester', '$keterangan');";
				
				//adding the path and name to database 
				if(mysqli_query($connection,$sql)){
					echo 'Insert data kedalam table tbl_pembelajaran berhasil.';
				} else {
					echo 'Gagal insert data kedalam tbl_pembelajaran!';
				}

			//if some error occurred 
			}catch(Exception $e) {
				$response['error']=true;
				$response['message']=$e->getMessage();
			}		
			//displaying the response 
			echo json_encode($response);
			
			//closing the connection 
			mysqli_close($connection);
	}