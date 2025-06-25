<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update_mahasiswa.php" method="post" enctype="multipart/form-data">
        <table border="1">
            <tr>
                <td>Nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tgl. Lahir</td>
                <td><input type="date" name="tgl_lahir" value="2005-01-01"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="1" checked> Pria
                    <input type="radio" name="gender" value="0"> Wanita
                </td>
            </tr>
            <tr>
                <td>Kemampuan Bahasa</td>
                <td>
                    <input type="checkbox" name="bahasa[]" value="Indonesia"> Indonesia <br>
                    <input type="checkbox" name="bahasa[]" value="Inggris"> Inggris <br>
                    <input type="checkbox" name="bahasa[]" value="Mandarin"> Mandarin <br>
                    <input type="checkbox" name="bahasa[]" value="Jepang"> Jepang <br>
                    <input type="checkbox" name="bahasa[]" value="Arab"> Arab <br>
                </td>
            </tr>
            <td>Warga Negara</td>
                <td>
                    <select name="warga_negara">
                        <option value="Indonesia" selected>Indonesia</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Thailand">Thailand</option>
                    </select>
                    </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Kota</td>
                <td><input type="text" name="kota"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="foto"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <th colspan="2"><input type="submit" value="Submit"></th>
            </tr>
        </table>
    </form>
</body>
</html>