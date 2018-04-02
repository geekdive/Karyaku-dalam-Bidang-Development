<?php
 include './koneksi/config.php';

$response = array();

$idinv = $_POST['vsidinv'];

$namainv = $_POST['vsnamainv'];	
$imginv = $_POST['vsimginv'];	
$inptime = $_POST['vsinptime'];	
$idkat = $_POST['vsidkat'];	
$idusr = $_POST['vsidusr'];

$sql = "UPDATE tbl_inventori SET nama_inventori = '$namainv', img_invventori = '$imginv', waktu_input = '$inptime', id_kategori = $idkat, id_user = $idusr WHERE id_inventori = $idinv;";
	if(mysqli_query($connection,$sql)){
	   $response["result"] = "1";
       $response["msg"] = "Data berhasil diupdate!!";
       echo json_encode($response);
		}else{
	   $response["result"] = "0";
       $response["msg"] = "Maaf! Gagal mengupdate data!!";
		echo json_encode($response);
		}
		mysqli_close($connection);
?>

