<?php
include("sambungan.php");
$niknya = $_GET["nik"];
$sql = "DELETE FROM dosen WHERE nik='$niknya'";
$conn->query(query: $sql);
echo "<a href=\"hasil.php\">Lihat Daftar Dosen</a>";
?>