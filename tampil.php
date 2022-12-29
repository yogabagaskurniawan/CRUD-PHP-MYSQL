
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
            text-align: center;
        }
        table{
            margin-bottom: 30px;
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
                    <td colspan=2>Aksi</td>              
                </tr>
            </thead>
            <?php
            include('koneksi.php');
            $no = 1;
            $query = mysqli_query($koneksi, 'SELECT * FROM mahasiswa');
            while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['NIM'] ?></td>
                    <td><?php echo $data['NAMA'] ?></td>
                    <td><?php echo $data['PRODI'] ?></td>
                    <td><?php echo "<button type='submit'><a href='edit.php?NIM=$data[NIM]'>EDIT</a></button>" ?></td>
                    <td><?php echo "<button type='submit' onclick='return konfirmasi()'><a href='hapus.php?NIM=$data[NIM]'>HAPUS</a></button>" ?></td>
                </tr>
                <?php 
            } 
            ?>
        </table>
    <a href="tambah.php">Tambah data</a>
    <script>
        function konfirmasi() {
            return confirm('Apakah anda yakin ingin menghapus data tersebut?')
        }
    </script>
</body>
</html>