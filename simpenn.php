<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "akademik";

    $koneksi = mysqli_connect($host, $user, $pass, $dbname);

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    
    //query untuk menyimpan data
    $query = "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$prodi')";
    $simpan = mysqli_query($koneksi, $query);

    //cek apakah data berhasil disimpan
    if($simpan){
        echo "<h1>Data berhasil disimpan</h1>";
        
    }else{
        echo "Data gagal disimpan";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan data yang diinputkan</title>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body>
    <h2>Menampilkan Data Dari Database Akademik</h2>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Nim</td>
                <td>Nama</td>
                <td>Prodi</td>                
            </tr>
        </thead>
        <?php
        $no = 1;
        $query = mysqli_query($koneksi, 'SELECT * FROM mahasiswa');
        while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['NIM'] ?></td>
                <td><?php echo $data['NAMA'] ?></td>
                <td><?php echo $data['PRODI'] ?></td>
            </tr>
            <?php 
        } 
        ?>
    </table>
</body>
</html>