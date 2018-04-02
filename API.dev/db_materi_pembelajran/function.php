<?php
include "./koneksi/config.php";

$tak = 2020;
for($ta = 2017; $ta <= $tak; $ta++){
    echo 'Tahun Ke-'.$ta."<br>";
    echo 'Data Konten '.$ta."<br><br>";
    $query = mysqli_query($connection,"SELECT pertemuan_ke 'Ke-', minggu_ke 'Minggu', DAYNAME(tanngal_pertemuan) 'Hari', DATE_FORMAT(tanngal_pertemuan, '%d %M %Y') 'Tanggal', materi_pembahasan 'Materi', jam_ke 'Jam Ke-', pukul 'Pukul', durasi 'Durasi', detail_pembahasan 'Pembahasan', tbl_pembelajaran.mata_pelajaran 'Mata Pelajaran' FROM tbl_pembelajaran join tbl_pertemuan ON tbl_pembelajaran.id_pembelajaran=tbl_pertemuan.id_pembelajaran WHERE DATE_FORMAT(tanngal_pertemuan, '%Y') = '2018';");
    include 'data_pertemuan.php';
}

?>