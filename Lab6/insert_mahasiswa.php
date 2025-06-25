<?php
include("sambungan.php");

extract($_POST);

// Menyusun nama file foto berdasarkan NIM
$fotone = "$nim." . str_replace("image/", "", $_FILES['foto']['type']);

// Jika pilihan bahasa diisi, gabungkan menjadi string. Jika tidak, set sebagai "Bahasa Alien"
if (is_array($bahasa)) {
    $bahasa = implode(", ", $bahasa); // Dari array menjadi sebuah string
} else {
    $bahasa = "Bahasa Alien";
}

// Memindahkan file foto ke direktori yang sesuai
if (move_uploaded_file($_FILES['foto']['tmp_name'], "foto/$fotone")) {
    // Menyusun query SQL untuk memasukkan data ke dalam tabel mahasiswa
    $sql = "INSERT INTO mahasiswa (nim, nama, tgl_lahir, gender, bahasa, warga_negara, alamat, kota, foto, password) 
            VALUES('$nim', '$nama', '$tgl_lahir', '$gender', '$bahasa', '$warga_negara', '$alamat', '$kota', '$fotone', '$password')";

    // Mengeksekusi query
    if ($conn->query($sql)) {
        echo "INSERT tabel mahasiswa berhasil, silakan dilihat melalui PHPMyAdmin...";
    } else {
        echo "Insert gagal, baca pesan pada browser Anda...";
    }
} else {
    echo "Upload gagal...<br><a href=\"javascript:history.back()\">Kembali</a>";
}

/*
$nama_file = $_FILES['foto']['name'];

if (move_uploaded_file($_FILES['foto']['tmp_name'], "foto/$nama_file")) {
    echo "berhasil...";//----> pindahkan dari tempat penyimpanan sementara di sever ke tempat yang kita inginkan
} else {
    echo "Upload gagal...";
     Catatan:
   $_FILES['foto'] adalah array asosiatif 2 dimensi
   $_FILES['foto']['name']  --> nama asli file yang dikirim
   $_FILES['foto']['type']  --> ekstensi file (jpg, pdf, png, dll)
   $_FILES['foto']['tmp_name'] --> lokasi sementara di server
   $_FILES['foto']['error'] --> kode error jika ada masalah upload
   $_FILES['foto']['size']  --> ukuran file dalam byte

}
   */
?>