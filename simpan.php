<?php
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    
    include('koneksi.php');
    //query untuk menyimpan data
    $query = "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$prodi')";
    $simpan = mysqli_query($koneksi, $query);

    //cek apakah data berhasil disimpan
    // if($simpan){
    //     echo "<h1>Data berhasil disimpan</h1>";
        
    // }else{
    //     echo "Data gagal disimpan";
    // }
    header('location:tampil.php');
?>