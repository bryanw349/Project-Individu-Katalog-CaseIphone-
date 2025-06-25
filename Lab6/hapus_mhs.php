<?php
include("sambungan.php");

// Proses Hapus jika ada parameter NIM
if (isset($_GET['hapus'])) {
    $nim = $_GET['hapus'];

    // Ambil nama file foto
    $sql_foto = "SELECT foto FROM mahasiswa WHERE nim = '$nim'";
    $result_foto = $conn->query($sql_foto);

    if ($result_foto->num_rows > 0) {
        $row_foto = $result_foto->fetch_assoc();
        $foto = $row_foto['foto'];

        // Hapus foto dari folder jika ada
        if (file_exists("foto/$foto")) {
            unlink("foto/$foto");
        }
    }

    // Hapus data mahasiswa
    $sql_hapus = "DELETE FROM mahasiswa WHERE nim = '$nim'";
    if ($conn->query($sql_hapus)) {
        echo "<p style='color:green;'>Data dengan NIM $nim berhasil dihapus.</p>";
    } else {
        echo "<p style='color:red;'>Gagal menghapus data: " . $conn->error . "</p>";
    }
}

// Ambil semua data mahasiswa
$sql = "SELECT nim, nama, foto FROM mahasiswa ORDER BY nim";
$result = $conn->query($sql);
?>

<h2>Daftar Mahasiswa</h2>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Foto</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td>
                <?php if (!empty($row['foto']) && file_exists("foto/" . $row['foto'])): ?>
                    <img src="foto/<?= $row['foto'] ?>" width="50">
                <?php else: ?>
                    -
                <?php endif; ?>
            </td>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td>
                <a href="?hapus=<?= $row['nim'] ?>" onclick="return confirm('Yakin ingin menghapus mahasiswa ini?')">Hapus</a>
            </td>
        </tr>
    <?php } ?>
</table>
