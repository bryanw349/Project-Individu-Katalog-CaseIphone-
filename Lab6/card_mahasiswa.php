<?php
include("sambungan.php");

if (isset($_GET['hapus'])) {
    $nim = $_GET['hapus'];
    $sql = "SELECT foto FROM mahasiswa WHERE nim = '$nim'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $foto = $result->fetch_assoc()['foto'];
        if (file_exists("foto/$foto")) {
            unlink("foto/$foto");
        }
    }

    $sql_hapus = "DELETE FROM mahasiswa WHERE nim = '$nim'";
    if ($conn->query($sql_hapus)) {
        echo "<p style='color:green;'>Data berhasil dihapus</p>";
    } else {
        echo "<p style='color:red;'>Gagal hapus data: " . $conn->error . "</p>";
    }
}

$sql = "SELECT * FROM mahasiswa ORDER BY nim";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa (Card View)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 200px;
            padding: 12px;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
            background-color: #fefefe;
            text-align: center;
        }

        .card img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            margin: 0 auto 10px;
            display: block;
        }

        .card h3 {
            margin: 5px 0;
            font-size: 16px;
        }

        .card p {
            margin: 3px 0;
            font-size: 13px;
            text-align: left;
        }

        .card .aksi {
            margin-top: 8px;
        }

        .card .aksi a {
            margin: 0 5px;
            text-decoration: none;
            color: white;
            padding: 5px 8px;
            border-radius: 4px;
            font-size: 12px;
        }

        .ubah {
            background-color: #007BFF;
        }

        .hapus {
            background-color: #dc3545;
        }
    </style>
</head>
<body>

<h2>Data Mahasiswa</h2>
<div class="container">
<?php while($row = $result->fetch_assoc()) { ?>
    <div class="card">
        <img src="foto/<?= $row['foto'] ?>" alt="Foto Mahasiswa">
        <h3><?= $row['nama'] ?></h3>
        <p><strong>NIM:</strong> <?= $row['nim'] ?></p>
        <p><strong>Bahasa:</strong> <?= $row['bahasa'] ?></p>
        <p><strong>Alamat:</strong> <?= $row['alamat'] ?></p>
        <div class="aksi">
            <a href="ubah_mahasiswa.php?nim=<?= $row['nim'] ?>" class="ubah">Ubah</a>
            <a href="mahasiswa_card.php?hapus=<?= $row['nim'] ?>" class="hapus" onclick="return confirm('Yakin hapus mahasiswa ini?')">Hapus</a>
        </div>
    </div>
<?php } ?>
</div>

</body>
</html>
