<?php
include '../koneksi/config.php';
$result_data = array ( 
    'InformasiKoneksi' => $response
); 
echo json_encode($result_data);
?>