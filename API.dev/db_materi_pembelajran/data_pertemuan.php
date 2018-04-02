
<body style="margin-left: 40px; margin-right: 0px; margin-top: 30px; font-family: monospace;">

    <table cellpadding="8" cellspacing="0">
        <tr style="background-color: #009688; color: white;  border-bottom:1pt solid black;">
            <th align="center" width="20px">No</th>
            <th align="left">Minggu</th>
            <th align="center" width="30px">Jumpa</th>
            <th align="left">Hari</th>
            <th align="left">Tanggal</th>
            <th align="left">Mata Pelajaran</th>
            <th align="left">Materi</th>
            <th align="center">Jam Ke-</th>
            <th align="left">Pukul</th>
            <th align="left">Durasi</th>
            <th align="left">Pembahasan</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr style="background-color: #FFFDE7; align: center;">
            <td align="center"><?php echo $no ?></td>
            <td><?php echo $data["Minggu"];?></td>
            <td align="center" ><?php echo $data["Ke-"];?></td>
            <td>
            <?php 
                $data["Hari"];

                if($data["Hari"]=="Monday"){
                    echo 'Senin';
                } else if ($data["Hari"]=="Tuesday"){
                    echo 'Selasa';
                } else if ($data["Hari"]=="Wednesday"){
                    echo 'Rabu';
                } else if ($data["Hari"]=="Thursday"){
                    echo 'Kamis';
                } else if ($data["Hari"]=="Friday"){
                    echo 'Jumat';
                } else if ($data["Hari"]=="Saturday"){
                    echo 'Sabtu';
                } else if ($data["Hari"]=="Sunday"){
                    echo 'Ahad';
                } 
            ?>
            </td>
            <td><?php echo $data["Tanggal"];?></td>
            <td><?php echo $data["Mata Pelajaran"];?></td>
            <td><?php echo $data["Materi"];?></td>
            <td align="center" style="background-color: #64FFDA; color: black;"><?php echo $data["Jam Ke-"];?></td>
            <td style="background-color: #64FFDA; color: black;"><?php echo $data["Pukul"];?></td>
            <td align="center" style="background-color: #64FFDA; color: black;"><?php echo $data["Durasi"];?></td>
            <td style="background-color: #64FFDA; color: black;"><?php echo $data["Pembahasan"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
<br>
<br>
</body>