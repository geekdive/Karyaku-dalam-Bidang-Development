<?php
 include './koneksi/config.php';

$response = array();

$idkat = $_POST['vsidkategori'];
$namakat = $_POST['vsnamakategori'];

$sql = "update tbl_kategori set nama_kategori = '$namakat' where id_kategori = $idkat;";
	if(mysqli_query($connection,$sql)){
	   $response["result"] = "1";
       $response["msg"] = "Data kategori berhasil diupdate!!";
       echo json_encode($response);
		}else{
	   $response["result"] = "0";
       $response["msg"] = "Maaf! Gagal mengupdate data kategori!!";
		echo json_encode($response);
		}
		mysqli_close($connection);
?>

