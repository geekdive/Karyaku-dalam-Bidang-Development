<?php

// definisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "!!&21adi";
$database = "db_pembelajaran";

// Koneksi dan memilih database di server
$connection = mysqli_connect($server,$username,$password,$database) or die("Informasi Koneksi: <b>Gagal Menghubungkan!</b>");
?>


