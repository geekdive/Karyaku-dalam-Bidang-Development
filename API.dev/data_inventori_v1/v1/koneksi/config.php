<?php

    $server = "localhost";
    $username = "root";
    $password = "!!&21adi";
    $database = "dbd_inventori_v1";

    $connection = mysqli_connect($server, $username, $password, $database);

    if (!$connection){
        $response['kode_pesan']= 0;
        $response['notifikasi_pesan']= "Host gagal terkoneksi ke server!!!, Periksa dan test file koneksi";
        $response['pesan_error']= "Pesan Erorr: ".mysqli_connect_error();
    } else {
        $response['kode_pesan']= 1;
        $response['notifikasi_pesan']= "Server kini terhubung";
        $response['pesan_error']= "Nothing found error! Good luck.";
    }


?>
