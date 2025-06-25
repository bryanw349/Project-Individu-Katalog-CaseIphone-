<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("sambungan.php");
$hasil = $conn->query("SELECT * FROM dosen");
if($hasil->num_rows > 0) {
    $nomer = 0;
    echo "<table border=\"1\">";
    echo "<caption>Daftar Dosen Universitas Kristen Duta Wacana Yogyakarta</caption>";
    echo "<tr><th>No.</th><th>NIK</th><th colspan=\"2\">Nama Dosen</th></tr>";
    while($baris = $hasil->fetch_assoc()){
        $nomer++;
        echo "<tr><td>$nomer.</td><td>".$baris["nik"]."</td><td>".$baris["namaDosen"]."</td>";
        echo "<td><a href='edit_dosen.php?nik=".$baris["nik"]."'>
                <img height='20' width='15' src='edit.png'></a>
              <a href='hapus_dosen.php?nik=".$baris["nik"]."'>
                <img height='20' width='15' src='delete.jpg'></a></td></tr>";
    }
    echo "<tr><td colspan=\"4\">";
    echo "<form action=\"tambah_dosen.php\" method=\"post\">";
    echo "<input type=\"submit\" value=\"Tambah Data Dosen Baru\">";
    echo "</form>";
    echo "</td></tr>";
} else {
    echo "<h3>Tabel masih kosong...</h3>";
}
?>
</body>
</html>