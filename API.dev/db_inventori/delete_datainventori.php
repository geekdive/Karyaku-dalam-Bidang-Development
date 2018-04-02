<?php
 include './koneksi/config.php';

$response = array();	
$idinv = $_POST['vsidinv'];

$sql = "DELETE FROM tbl_inventori WHERE id_inventori = $idinv;";
	if(mysqli_query($connection,$sql)){
	   $response["result"] = "1";
       $response["msg"] = "Data inventori berhasil dihapus!!";
       echo json_encode($response);
		}else{
	   $response["result"] = "0";
       $response["msg"] = "Maaf! Gagal menghapus data inventori!!";
		echo json_encode($response);
		}
		mysqli_close($connection);
?>

