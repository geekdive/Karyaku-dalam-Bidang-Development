<?php 
 include './koneksi/config.php';

	$response = array(); 
	
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$meetto = $_POST['vsmeet'];	
		$tglmeet = $_POST['vstgl'];	
		$materi = $_POST['vsmateri'];	
		$jamke = $_POST['vsjamke'];	
		$waktu = $_POST['vspukul'];
		$pembahasan = $_POST['vsbahasan'];
		$idpembelajaran = $_POST['vsidbelajar'];
        $mingguke = $_POST['vsmingguke'];
        
			//trying to save the file in the directory 
			try{
				//saving the file 
				$sql = "INSERT INTO tbl_pertemuan (`pertemuan_ke`, `tanngal_pertemuan`, `materi_pembahasan`, `jam_ke`, `pukul`, `detail_pembahasan`, `id_pembelajaran`, `minggu_ke`) VALUES ('$meetto', '$tglmeet', '$materi', '$jamke', '$waktu', '$pembahasan', '$idpembelajaran', '$mingguke');";
				
				//adding the path and name to database 
				if(mysqli_query($connection,$sql)){
					echo 'Insert data kedalam table tbl_pertemuan berhasil.';
				} else {
					echo 'Gagal insert data kedalam table_pertemuan!';
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