<?php
    include('koneksi.php');
    $query = "DELETE FROM mahasiswa WHERE NIM='$_GET[NIM]'";
    $simpan = mysqli_query($koneksi, $query);

    // if (isset($_POST['NIM'])) {
    //     if (confirm('Apakah Anda yakin ingin menghapus?')) {
    //         $simpan;
    //     }
    // }
    header('location:tampil.php');
?>