<?php
 include './koneksi/config.php';

    $sql = "SELECT * FROM tbl_pembelajaran;";

    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
   
    $akhir = array(
	
   	'DataMataPelajaran' => $emparray
    );

 	echo json_encode($akhir);


    //close the db connection
    mysqli_close($connection);
?>
