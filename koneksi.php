<?php
// koneksi.php
// Konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "weeklyzakliya";

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi (hanya akan tampil error jika gagal)
if (!$koneksi) {
    die("Koneksi database gagal, Bos!: " . mysqli_connect_error());
}
?>