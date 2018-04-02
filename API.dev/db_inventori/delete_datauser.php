<?php
 include './koneksi/config.php';

$response = array();	
$idusr = $_POST['vsidusr'];

$sql = "DELETE FROM tbl_user WHERE id_user = $idusr;";
	if(mysqli_query($connection,$sql)){
	   $response["result"] = "1";
       $response["msg"] = "Data user berhasil dihapus!!";
       echo json_encode($response);
		}else{
	   $response["result"] = "0";
       $response["msg"] = "Maaf! Gagal menghapus data, Coba periksa settingan file .PHP!";
		echo json_encode($response);
		}
		mysqli_close($connection);
?>

