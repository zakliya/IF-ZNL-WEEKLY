<?php
// koneksi.php
// Konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "weeklyzakliya";

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);
function tampildata($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    
    $rows = [];
    while($row = mysqli_fetch_row($result)){
        $rows[] = $row;
    }
    return $rows;
}

// Cek koneksi (hanya akan tampil error jika gagal)
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

function tambahdata($data){

    global $koneksi;

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $foto = $data["foto"];

    // PERBAIKAN 1: Menambahkan titik koma (;) di akhir perintah SQL ini
    $query = "INSERT INTO mahasiswa (nama,nim,jurusan,email,no_hp,foto)
    VALUES ('$nama', '$nim','$jurusan','$email','$no_hp','$foto');";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);

}
?>