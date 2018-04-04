<?php

include './koneksi/config.php';

    $vsidusr = $_POST['vsiduser'];
    $vsidcat = $_POST['vsidkategori'];
     
    $sql = "SELECT * FROM tbl_inventori ti, tbl_users tu, tbl_kategori tki WHERE tu.id_user = '$vsidusr' AND tki.nama_kategori = '$vsidcat' AND ti.id_user = tu.id_user AND ti.id_kategori = tki.id_kategori";

    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    
    $akhir = array(
   	'DataInventori' => $emparray
    );

    echo json_encode($akhir);
    mysqli_close($connection);
?>
