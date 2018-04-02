<?php 
include './koneksi/config.php';

	$response = array(); 
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		if (isset($_POST["vsjenkel"]) && isset($_POST["vsnama"])  && isset($_POST["vsalamat"])  && isset($_POST["vsnotelp"])&& isset($_POST["vsusername"])&& isset($_POST["vslevel"])&& isset($_POST["vspassword"])) {

            $nama = $_POST['vsnama'];	
            $alamat = $_POST['vsalamat'];
            $notelp = $_POST['vsnotelp'];
            $jenkel = $_POST['vsjenkel'];
            $username = $_POST['vsusername'];
            $password = md5($_POST["vspassword"]);
            $level = $_POST["vslevel"];
            
            $sql = "SELECT * FROM tbl_user WHERE username ='$username'";
            $check = mysqli_fetch_array(mysqli_query($connection,$sql));
            if(isset($check)){
                $response["result"] = 0;
                $response["msg"] = "Oops! Username sudah terdaftar!";
                echo json_encode($response);
            } else {
                $sql = "insert into tbl_user (nama_user, alamat, no_telp, jenis_kelamin, username, password, level_user) VALUES('$nama','$alamat','$notelp','$jenkel', '$username','$password', '$level');";
                    
                if(mysqli_query($connection,$sql)){
                    $response['result'] = "1";
                    $response['msg'] = "Berhasil register!!";
                } else {
                    $response['result'] = "0";
                    $response['msg'] = "Gagal register!!";
        
                }
                echo json_encode($response);
            }
        }
	}