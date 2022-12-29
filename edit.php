<?php
    include('koneksi.php');
    $query = "SELECT * FROM mahasiswa WHERE NIM='$_GET[NIM]'";
    $simpan = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($simpan);
    echo "
    <h1>Edit data mahasiswa</h1>
        <form action='update.php' method='POST'>
            <table>
                <tr>
                    <td>NIM</td>
                    <td><input type='text' name='nim' value='$data[NIM]' /></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td><input type='text' name='nama' value='$data[NAMA]' /></td>
                </tr>
                <tr>
                    <td>PRODI</td>
                    <td><input type='text' name='prodi' value='$data[PRODI]' /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type='submit' value='Update data' /></td>
                </tr>
            </table>
        </form>
    ";
?>