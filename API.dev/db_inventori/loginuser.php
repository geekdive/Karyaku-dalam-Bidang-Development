<?php 

    $response = array();

    $usrnm = $_POST['usernamein'];
    $usrpsw = md5($_POST['passwordin']);
    $usrlvl = $_POST['levelin'];

    include './koneksi/config.php';

    $leveldetails = mysqli_query (
        $connection, "SELECT * FROM tbl_user WHERE username= '$usrnm' and level_user ='$usrlvl' and password ='$usrpsw';"
    ); 

    if (!$leveldetails) { 
	    echo 'Could not run query: ' . mysqli_error($connection); 
        exit;
    } 
  
    $row = mysqli_fetch_row($leveldetails); 

    $result_data = array ( 
        'id_user' => $row[0],
        'nama_user' => $row[1],
        'alamat' => $row[2],
        'no_telp' => $row[3],
        'jenis_kelamin' => $row[4],
        'username' => $row[5],
	'password' => $row[6],
        'level_user' => $row[7]
    ); 

    if (mysqli_num_rows($leveldetails) > 0) {
        $response['result'] = "1";
        $response['msg'] = "Berhasil login!!";
        $response['user'] = $result_data;
    } else {
        $response['result'] = "0";
        $response['msg'] = "Gagal login!!";
    }
    
    echo json_encode($response);

?>
