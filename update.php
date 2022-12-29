<?php
    include('koneksi.php');
    
    $query = "UPDATE mahasiswa set
        nama = '$_POST[nama]',
        prodi = '$_POST[prodi]'
        WHERE nim = '$_POST[nim]'
    ";
    $simpan = mysqli_query($koneksi, $query);
    header('location:tampil.php');
?>