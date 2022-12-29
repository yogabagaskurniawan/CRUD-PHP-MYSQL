<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input database</title>
</head>
<body>
    <h1>Silahkan tambahkan data</h1>
    <form action="simpan.php" method="POST">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" /></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" /></td>
        </tr>
        <tr>
            <td>PRODI</td>
            <td><input type="text" name="prodi" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" /></td>
        </tr>
    </table>
    </form>
</body>
</html>