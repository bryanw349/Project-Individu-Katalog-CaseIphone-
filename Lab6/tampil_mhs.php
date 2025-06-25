<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "fungsi.php";

    $row = array(
        "nim" => "72220562",
        "nama" => "Sugi",
        "alamat" => "Jl. Kesenangan69",
        "telpon" => "08112312125",
        "kota" => "Tokyo",
        "foto" => "foto/mhs02.jpg"
    );

    card( $row,  "foto");
?>
</body>
</html>