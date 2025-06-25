<?php
    include("sambungan.php");
    extract(array: $_POST); // $nik = $_POST["nik"];
                           // $namaDosen = $_POST["namaDosen"];

    $sql = "INSERT INTO dosen VALUES('$nik', '$namaDosen')";
    $conn->query($sql);

    header("Location: hasil.php"); // <-- langsung pindah halaman
?>