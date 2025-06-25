<?php 
$conn = new mysqli("127.0.0.1", "root", "", "sia");

if ($conn->connect_error) {
    die("Terjadi kesalahan yang fatal: " . $conn->connect_error);
}
?>