<?php
 include './koneksi/config.php';

$response = array();	
$idkat = $_POST['vsidkategori'];

$sql = "DELETE FROM tbl_kategori WHERE id_kategori = $idkat;";
	if(mysqli_query($connection,$sql)){
	   $response["result"] = "1";
       $response["msg"] = "Data kategori berhasil dihapus!!";
       echo json_encode($response);
		}else{
	   $response["result"] = "0";
       $response["msg"] = "Maaf! Gagal menghapus data, Coba periksa settingan file .PHP!";
		echo json_encode($response);
		}
		mysqli_close($connection);
?>

