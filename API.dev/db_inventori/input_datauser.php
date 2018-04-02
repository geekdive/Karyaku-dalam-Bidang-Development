<?php 
 include './koneksi/config.php';

	$response = array(); 
	
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$usrnama = $_POST['vsnama'];
		$usralamt = $_POST['vsalamat'];
		$usrtlp = $_POST['vstelp'];
		$usrjk = $_POST['vsjk'];
		$usrname = $_POST['vsusername'];
		$password = md5($_POST["vspassword"]);
		$level_user = $_POST['vsleveluser'];

			//trying to save the file in the directory 
			try{
				//saving the file 
				$sql = "INSERT INTO tbl_user (nama_user, alamat, no_telp, jenis_kelamin, username, password, level_user) VALUES ('$usrnama', '$usralamt', '$usrtlp', '$usrjk', '$usrname', '$password', '$level_user');";
				
				//adding the path and name to database 
				if(mysqli_query($connection,$sql)){
					echo 'Insert data kedalam table tbl_user berhasil.';
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
		$sql = "SELECT max(id_user) AS id_user FROM tbl_user";

		$sql1 = "SELECT id_user AS id_user FROM tbl_user;";
		
		$result = mysqli_fetch_array(mysqli_query($connection,$sql));
		$result1 = mysqli_fetch_array(mysqli_query($connection,$sql1));
		
		mysqli_close($connection);
		if($result1['id_user']==null)
			return 1; 
		else 
			return ++$result['id_user']; 
	}