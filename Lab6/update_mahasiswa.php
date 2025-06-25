<?php
include("sambungan.php");

extract($_POST);

$fotone = "$nim." . str_replace("image/", "", $_FILES['foto']['type']);

// Ubah array bahasa menjadi string jika perlu
if (is_array($bahasa)) {
    $bahasa = implode(", ", $bahasa);
} else {
    $bahasa = "Bahasa Alien";
}

// Cek apakah user upload foto baru
if ($_FILES['foto']['tmp_name'] != "") {
    if (move_uploaded_file($_FILES['foto']['tmp_name'], "foto/$fotone")) {
        $sql = "UPDATE mahasiswa SET 
                    nama = '$nama',
                    tgl_lahir = '$tgl_lahir',
                    gender = '$gender',
                    bahasa = '$bahasa',
                    warga_negara = '$warga_negara',
                    alamat = '$alamat',
                    kota = '$kota',
                    foto = '$fotone',
                    password = '$password'
                WHERE nim = '$nim'";
    } else {
        echo "Upload foto gagal...<br><a href=\"javascript:history.back()\">Kembali</a>";
        exit();
    }
} else {
    // Jika foto tidak diupload ulang
    $sql = "UPDATE mahasiswa SET 
                nama = '$nama',
                tgl_lahir = '$tgl_lahir',
                gender = '$gender',
                bahasa = '$bahasa',
                warga_negara = '$warga_negara',
                alamat = '$alamat',
                kota = '$kota',
                password = '$password'
            WHERE nim = '$nim'";
}

if ($conn->query($sql)) {
    echo "UPDATE data mahasiswa berhasil.";
} else {
    echo "Gagal update data: " . $conn->error;
}
?>
