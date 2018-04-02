<?php
 include './koneksi/config.php';

$response = array();

$idusr = $_POST['vsidusr'];		
$usrnama = $_POST['vsnama'];
$usralamt = $_POST['vsalamat'];
$usrtlp = $_POST['vstelp'];
$usrjk = $_POST['vsjk'];
$usrname = $_POST['vsusername'];
$password = md5($_POST["vspassword"]);
$level_user = $_POST['vsleveluser'];

$sql = "UPDATE tbl_user SET nama_user = '$usrnama', alamat = '$usralamt', no_telp = '$usrtlp', jenis_kelamin = '$usrjk', username = '$usrname', password = '$password', level_user = '$level_user' where id_user = $idusr;";
	if(mysqli_query($connection,$sql)){
	   $response["result"] = "1";
       $response["msg"] = "Data user berhasil diupdate!!";
       echo json_encode($response);
		}else{
	   $response["result"] = "0";
       $response["msg"] = "Maaf! Gagal mengupdate data user!!";
		echo json_encode($response);
		}
		mysqli_close($connection);
?>

