<?php 
 include './koneksi/config.php';

	$response = array(); 
	
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$namekat = $_POST['vsnamekat'];

			//trying to save the file in the directory 
			try{
				//saving the file 
				$sql = "INSERT INTO tbl_kategori ( `nama_kategori`) VALUES ('$namekat');";
				
				//adding the path and name to database 
				if(mysqli_query($connection,$sql)){
					echo 'Insert data kedalam table tbl_kategori berhasil.';
				} else {
					echo 'Terjadi kesalahan, ulangi lagi!';
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
	
	function getFileName(){
		include('db.php');    

		//$connection = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
		$sql = "SELECT max(id_kategori) AS id_kategori FROM id_kategori";

		$sql1 = "SELECT id_kategori AS id_kategori FROM id_kategori;";
		
		$result = mysqli_fetch_array(mysqli_query($connection,$sql));
		$result1 = mysqli_fetch_array(mysqli_query($connection,$sql1));
		
		mysqli_close($connection);
		if($result1['id_kategori']==null)
			return 1; 
		else 
			return ++$result['id_kategori']; 
	}