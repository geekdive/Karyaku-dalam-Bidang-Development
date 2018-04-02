<?php
 include './koneksi/config.php';

    $sql = "SELECT id_inventori, nama_barang, waktu_input, tbl_kategori.nama_kategori, tbl_users.nama_user FROM tbl_inventori JOIN tbl_users ON tbl_users.id_user=tbl_inventori.id_user JOIN tbl_kategori ON tbl_kategori.id_kategori=tbl_inventori.id_kategori";

    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
   
    $akhir = array(
	
   	'DataListInventori' => $emparray
    );

 	echo json_encode($akhir);


    //close the db connection
    mysqli_close($connection);
?>
