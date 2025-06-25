<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $niknya = $_GET["nik"];
    $sql = "SELECT * FROM dosen WHERE nik='$niknya'";
    include("sambungan.php");
    $hasil = $conn->query($sql);
    $brs = $hasil->fetch_assoc();
?>
    <form action="update_dosen.php" method="post">
        <table border="1">
            <caption>Tambah Data Dosen</caption>
            <tr>
                <td>NIK</td>
                <td><input type="text" name="nik"></td>
            </tr>
            <tr>
                <td>Nama Dosen</td>
                <td><input type="text" name="namaDosen"></td>
            </tr>
            <tr>
                <th colspan="2">
                    <input type="submit">
                    <input type="reset">
                </th>
            </tr>
        </table>
    </form>
</body>
</html>