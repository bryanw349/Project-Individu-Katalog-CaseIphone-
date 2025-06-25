<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Data Dosen</title>
    </head>
    <body>
        <?php
        include("sambungan.php");
        $niknya = $_GET["nik"];
        $sql = "SELECT * FROM dosen WHERE nik='$niknya'";
        $hasil = $conn->query($sql);
        $brs = $hasil->fetch_assoc();

        if ($brs) {
            $nik = $brs["nik"];
            $namaDosen = $brs["namaDosen"];
        } else {
            die("Data tidak ditemukan.");
        }
        ?>
        <form action="update_dosen.php" method="post">
            <table border="1" align="center">
                <caption>Edit Data Dosen</caption>
                <tr>
                    <td>Nik</td>
                    <td><input type="text" name="nik" value="<?= htmlspecialchars($nik) ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama Dosen</td>
                    <td><input type="text" name="namaDosen" value="<?= htmlspecialchars($namaDosen) ?>"></td>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" value="Simpan"> <input type="reset" value="Reset"></th>
                </tr>
            </table>
        </form>
    </body>
    </html>