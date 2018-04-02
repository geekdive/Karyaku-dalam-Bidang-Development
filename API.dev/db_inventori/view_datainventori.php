<?php

include './koneksi/config.php';

    $vsid = $_POST['vsiduser'];
    $vsnamekategoriselect = $_POST['vsnamekategoriselecting'];
     
    $sql = "SELECT * FROM tbl_inventori, tbl_user, tbl_kategori WHERE tbl_inventori.id_user = '$vsid' AND tbl_kategori.nama_kategori = '$vsnamekategoriselect' AND tbl_inventori.id_user = tbl_user.id_user AND tbl_inventori.id_kategori = tbl_kategori.id_kategori";

    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
   
    $akhir = array(
   	'DataInventoriSelecting' => $emparray
    );

    echo json_encode($akhir);
    mysqli_close($connection);
?>
