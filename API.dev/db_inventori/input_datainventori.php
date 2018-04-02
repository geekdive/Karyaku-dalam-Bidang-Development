<?php 
 include './koneksi/config.php';

	$response = array(); 
	
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$namainv = $_POST['vsnamainv'];	
		$imginv = $_POST['vsimginv'];	
		$inptime = $_POST['vsinptime'];	
		$idkat = $_POST['vsidkat'];	
		$idusr = $_POST['vsidusr'];

			//trying to save the file in the directory 
			try{
				//saving the file 
				$sql = "INSERT INTO tbl_inventori ( `nama_inventori`,`img_invventori`,`waktu_input`,`id_kategori`,`id_user`) VALUES ('$namainv','$imginv','$inptime','$idkat','$idusr')";
				
				//adding the path and name to database 
				if(mysqli_query($connection,$sql)){
					echo 'Insert data kedalam table tbl_inventori berhasil.';
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
		$sql = "SELECT max(id_inventori) AS id_inventori FROM tbl_inventori";

		$sql1 = "SELECT id_inventori AS id_inventori FROM tbl_inventori;";
		
		$result = mysqli_fetch_array(mysqli_query($connection,$sql));
		$result1 = mysqli_fetch_array(mysqli_query($connection,$sql1));
		
		mysqli_close($connection);
		if($result1['id_inventori']==null)
			return 1; 
		else 
			return ++$result['id_inventori']; 
	}