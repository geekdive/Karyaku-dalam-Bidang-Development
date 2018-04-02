<?php 
    include "./koneksi/config.php";
    
    $bulan = array
    (
        "January", 
        "February", 
        "March", 
        "April", 
        "May", 
        "June", 
        "July", 
        "August", 
        "September", 
        "October", 
        "November", 
        "December"
    ); 

    $hari = array
    (
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Jumat",
        "Sabtu",
        "Ahad"
    );



    include 'title_site.php';
    
    for ($nomor = 0; $nomor <= 12; $nomor++) {
        echo "</b><br>";
        
        if($bulan[$nomor]=="January"){
            include 'lable_konten.php';?>
            <font style="background: #F0F4C3; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: black;">Januari</font>
            <font style="background: #8BC34A; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: white;">2018/2019</font>
            <font style="background: blue; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: white;">Android Intermediate</font><br><br><?php
            $query = mysqli_query($connection,"SELECT pertemuan_ke 'Ke-', minggu_ke 'Minggu', DAYNAME(tanngal_pertemuan) 'Hari', DATE_FORMAT(tanngal_pertemuan, '%d %M %Y') 'Tanggal', materi_pembahasan 'Materi', jam_ke 'Jam Ke-', pukul 'Pukul', durasi 'Durasi', detail_pembahasan 'Pembahasan', tbl_pembelajaran.mata_pelajaran 'Mata Pelajaran' FROM tbl_pembelajaran join tbl_pertemuan ON tbl_pembelajaran.id_pembelajaran=tbl_pertemuan.id_pembelajaran WHERE monthname(tanngal_pertemuan)='January';");
            include 'data_pertemuan.php';

        } else if ($bulan[$nomor]=="February"){
            include 'lable_konten.php';?>
            <font style="background: #F0F4C3; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: black;">Januari</font>
            <font style="background: #8BC34A; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: white;">2018/2019</font>
            <font style="background: blue; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: white;">Android Intermediate</font><br><br><?php
            $query = mysqli_query($connection,"SELECT pertemuan_ke 'Ke-', minggu_ke 'Minggu', DAYNAME(tanngal_pertemuan) 'Hari', DATE_FORMAT(tanngal_pertemuan, '%d %M %Y') 'Tanggal', materi_pembahasan 'Materi', jam_ke 'Jam Ke-', pukul 'Pukul', durasi 'Durasi', detail_pembahasan 'Pembahasan', tbl_pembelajaran.mata_pelajaran 'Mata Pelajaran' FROM tbl_pembelajaran join tbl_pertemuan ON tbl_pembelajaran.id_pembelajaran=tbl_pertemuan.id_pembelajaran WHERE monthname(tanngal_pertemuan)='February';");
            include 'data_pertemuan.php';
            
        } else if ($bulan[$nomor]=="March"){
            include 'lable_konten.php';?><font style="background: #F0F4C3; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: black;">Maret</font><font style="background: #8BC34A; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: white;">2018/2019</font><br><br><?php
            $query = mysqli_query($connection,"SELECT pertemuan_ke 'Ke-', minggu_ke 'Minggu', DAYNAME(tanngal_pertemuan) 'Hari', DATE_FORMAT(tanngal_pertemuan, '%d %M %Y') 'Tanggal', materi_pembahasan 'Materi', jam_ke 'Jam Ke-', pukul 'Pukul', durasi 'Durasi', detail_pembahasan 'Pembahasan', tbl_pembelajaran.mata_pelajaran 'Mata Pelajaran' FROM tbl_pembelajaran join tbl_pertemuan ON tbl_pembelajaran.id_pembelajaran=tbl_pertemuan.id_pembelajaran WHERE monthname(tanngal_pertemuan)='March';");
            include 'data_pertemuan.php';
     
        } else if ($bulan[$nomor]=="April"){
            include 'lable_konten.php';?><font style="background: #F0F4C3; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: black;">April</font><font style="background: #8BC34A; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: white;">2018/2019</font><font style="background: #E8EAF6; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: black;">NOT YET!</font><br><br><?php
            $query = mysqli_query($connection,"SELECT pertemuan_ke 'Ke-', minggu_ke 'Minggu', DAYNAME(tanngal_pertemuan) 'Hari', DATE_FORMAT(tanngal_pertemuan, '%d %M %Y') 'Tanggal', materi_pembahasan 'Materi', jam_ke 'Jam Ke-', pukul 'Pukul', durasi 'Durasi', detail_pembahasan 'Pembahasan', tbl_pembelajaran.mata_pelajaran 'Mata Pelajaran' FROM tbl_pembelajaran join tbl_pertemuan ON tbl_pembelajaran.id_pembelajaran=tbl_pertemuan.id_pembelajaran WHERE monthname(tanngal_pertemuan)='April';");
            include 'data_pertemuan.php';
            
        } else if ($bulan[$nomor]=="May"){
            include 'lable_konten.php';?><font style="background: #F0F4C3; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: black;">Mei</font><font style="background: #8BC34A; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: white;">2018/2019</font><font style="background: #E8EAF6; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: black;">NOT YET!</font><br><br><?php
            $query = mysqli_query($connection,"SELECT pertemuan_ke 'Ke-', minggu_ke 'Minggu', DAYNAME(tanngal_pertemuan) 'Hari', DATE_FORMAT(tanngal_pertemuan, '%d %M %Y') 'Tanggal', materi_pembahasan 'Materi', jam_ke 'Jam Ke-', pukul 'Pukul', durasi 'Durasi', detail_pembahasan 'Pembahasan', tbl_pembelajaran.mata_pelajaran 'Mata Pelajaran' FROM tbl_pembelajaran join tbl_pertemuan ON tbl_pembelajaran.id_pembelajaran=tbl_pertemuan.id_pembelajaran WHERE monthname(tanngal_pertemuan)='May';");
            include 'data_pertemuan.php';
            
        } else if ($bulan[$nomor]=="June"){
            include 'lable_konten.php';?><font style="background: #F0F4C3; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: black;">Juni</font><font style="background: #8BC34A; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: white;">2018/2019</font><font style="background: #E8EAF6; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: black;">NOT YET!</font><br><br><?php
            $query = mysqli_query($connection,"SELECT pertemuan_ke 'Ke-', minggu_ke 'Minggu', DAYNAME(tanngal_pertemuan) 'Hari', DATE_FORMAT(tanngal_pertemuan, '%d %M %Y') 'Tanggal', materi_pembahasan 'Materi', jam_ke 'Jam Ke-', pukul 'Pukul', durasi 'Durasi', detail_pembahasan 'Pembahasan', tbl_pembelajaran.mata_pelajaran 'Mata Pelajaran' FROM tbl_pembelajaran join tbl_pertemuan ON tbl_pembelajaran.id_pembelajaran=tbl_pertemuan.id_pembelajaran WHERE monthname(tanngal_pertemuan)='June';");
            include 'data_pertemuan.php';
            
        } else if ($bulan[$nomor]=="July"){
            include 'lable_konten.php';?><font style="background: #F0F4C3; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: black;">Juli</font><font style="background: #0091EA; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: white;">2017/2018</font><br><br><?php
            $query = mysqli_query($connection,"SELECT pertemuan_ke 'Ke-', minggu_ke 'Minggu', DAYNAME(tanngal_pertemuan) 'Hari', DATE_FORMAT(tanngal_pertemuan, '%d %M %Y') 'Tanggal', materi_pembahasan 'Materi', jam_ke 'Jam Ke-', pukul 'Pukul', durasi 'Durasi', detail_pembahasan 'Pembahasan', tbl_pembelajaran.mata_pelajaran 'Mata Pelajaran' FROM tbl_pembelajaran join tbl_pertemuan ON tbl_pembelajaran.id_pembelajaran=tbl_pertemuan.id_pembelajaran WHERE monthname(tanngal_pertemuan)='July';");
            include 'data_pertemuan.php';
            
        } else if ($bulan[$nomor]=="August"){
            include 'lable_konten.php';?><font style="background: #F0F4C3; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: black;">Agustus</font><font style="background: #0091EA; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: white;">2017/2018</font><br><br><?php
            $query = mysqli_query($connection,"SELECT pertemuan_ke 'Ke-', minggu_ke 'Minggu', DAYNAME(tanngal_pertemuan) 'Hari', DATE_FORMAT(tanngal_pertemuan, '%d %M %Y') 'Tanggal', materi_pembahasan 'Materi', jam_ke 'Jam Ke-', pukul 'Pukul', durasi 'Durasi', detail_pembahasan 'Pembahasan', tbl_pembelajaran.mata_pelajaran 'Mata Pelajaran' FROM tbl_pembelajaran join tbl_pertemuan ON tbl_pembelajaran.id_pembelajaran=tbl_pertemuan.id_pembelajaran WHERE monthname(tanngal_pertemuan)='August';");
            include 'data_pertemuan.php';
            
        } else if ($bulan[$nomor]=="September"){
            include 'lable_konten.php';?><font style="background: #F0F4C3; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: black;">September</font><font style="background: #0091EA; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: white;">2017/2018</font><br><br><?php
            $query = mysqli_query($connection,"SELECT pertemuan_ke 'Ke-', minggu_ke 'Minggu', DAYNAME(tanngal_pertemuan) 'Hari', DATE_FORMAT(tanngal_pertemuan, '%d %M %Y') 'Tanggal', materi_pembahasan 'Materi', jam_ke 'Jam Ke-', pukul 'Pukul', durasi 'Durasi', detail_pembahasan 'Pembahasan', tbl_pembelajaran.mata_pelajaran 'Mata Pelajaran' FROM tbl_pembelajaran join tbl_pertemuan ON tbl_pembelajaran.id_pembelajaran=tbl_pertemuan.id_pembelajaran WHERE monthname(tanngal_pertemuan)='September';");
            include 'data_pertemuan.php';
            
        } else if ($bulan[$nomor]=="October"){
            include 'lable_konten.php';?><font style="background: #F0F4C3; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: black;">Oktober</font><font style="background: #0091EA; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: white;">2017/2018</font><br><br><?php
            $query = mysqli_query($connection,"SELECT pertemuan_ke 'Ke-', minggu_ke 'Minggu', DAYNAME(tanngal_pertemuan) 'Hari', DATE_FORMAT(tanngal_pertemuan, '%d %M %Y') 'Tanggal', materi_pembahasan 'Materi', jam_ke 'Jam Ke-', pukul 'Pukul', durasi 'Durasi', detail_pembahasan 'Pembahasan', tbl_pembelajaran.mata_pelajaran 'Mata Pelajaran' FROM tbl_pembelajaran join tbl_pertemuan ON tbl_pembelajaran.id_pembelajaran=tbl_pertemuan.id_pembelajaran WHERE monthname(tanngal_pertemuan)='October';");
            include 'data_pertemuan.php';
            
        } else if ($bulan[$nomor]=="November"){
            include 'lable_konten.php';?><font style="background: #F0F4C3; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: black;">November</font><font style="background: #0091EA; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: white;">2017/2018</font><br><br><?php
            $query = mysqli_query($connection,"SELECT pertemuan_ke 'Ke-', minggu_ke 'Minggu', DAYNAME(tanngal_pertemuan) 'Hari', DATE_FORMAT(tanngal_pertemuan, '%d %M %Y') 'Tanggal', materi_pembahasan 'Materi', jam_ke 'Jam Ke-', pukul 'Pukul', durasi 'Durasi', detail_pembahasan 'Pembahasan', tbl_pembelajaran.mata_pelajaran 'Mata Pelajaran' FROM tbl_pembelajaran join tbl_pertemuan ON tbl_pembelajaran.id_pembelajaran=tbl_pertemuan.id_pembelajaran WHERE monthname(tanngal_pertemuan)='November';");
            include 'data_pertemuan.php';
            
        } else if ($bulan[$nomor]=="December"){
            include 'lable_konten.php';?><font style="background: #F0F4C3; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: black;">Desember</font><font style="background: #0091EA; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; color: white;">2017/2018</font><br><br><?php
            $query = mysqli_query($connection,"SELECT pertemuan_ke 'Ke-', minggu_ke 'Minggu', DAYNAME(tanngal_pertemuan) 'Hari', DATE_FORMAT(tanngal_pertemuan, '%d %M %Y') 'Tanggal', materi_pembahasan 'Materi', jam_ke 'Jam Ke-', pukul 'Pukul', durasi 'Durasi', detail_pembahasan 'Pembahasan', tbl_pembelajaran.mata_pelajaran 'Mata Pelajaran' FROM tbl_pembelajaran join tbl_pertemuan ON tbl_pembelajaran.id_pembelajaran=tbl_pertemuan.id_pembelajaran WHERE monthname(tanngal_pertemuan)='December';");
            include 'data_pertemuan.php';
            
        }
    } 


?>