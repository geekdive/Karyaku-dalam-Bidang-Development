<?php
 include './config/koneksi.php';

 $response = array();	
 $vsid = $_POST['vsidmakanan'];

$sql = "SELECT id_makanan FROM tblmakanan WHERE id_makanan=$vsid";
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

