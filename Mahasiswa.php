<?php
// 1. Memanggil koneksi database yang sudah dipisah
require 'koneksi.php';

// 2. Mengambil data dari tabel mahasiswa
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | WEB INFORMATIKA 2026</title>
    <link rel="stylesheet" href="css/mahasiswa.css"> 
</head>
<body> 
    <h1>WEB INFORMATIKA C 2026</h1>
    <hr>
    
    <table class="dashboard">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="Profil.php">Profile</a></td>
            <td><a href="Contact.php">Contact</a></td>
            <td><a href="Mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>
    
    <h3>Data Mahasiswa</h3>
    <a href="inputdata.html"><button>Tambah Data Mahasiswa</button></a>
    <hr>
    
    <table class="table" border="1" cellspacing="0" cellpadding="8">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Foto</th>
        </tr>

        <?php
        // 3. PROSES FRONTEND: Looping Data ke dalam Tabel HTML
        $no = 1;
        
        // mysqli_fetch_assoc memecah data per baris menjadi array asosiatif
        while ($mhsa = mysqli_fetch_assoc($result)) {
        ?>
        
        <tr>
            <td align="center"><?= $no; ?></td>
            <td><?= htmlspecialchars($mhsa['nama']); ?></td>
            <td align="center"><?= htmlspecialchars($mhsa['nim']); ?></td>
            <td align="center"><?= htmlspecialchars($mhsa['jurusan']); ?></td>
            <td><?= htmlspecialchars($mhsa['email']); ?></td>
            <td><?= htmlspecialchars($mhsa['no_hp']); ?></td>
            <td align="center">
                <img src="Aset/<?= htmlspecialchars($mhsa['foto']); ?>" width="70" height="70" alt="Foto <?= $mhsa['nama']; ?>" style="object-fit: cover; border-radius: 5px;">
            </td>
        </tr>

        <?php
            $no++; // Tambah angka urutan tiap baris
        } // Penutup loop while
        ?>
    </table>
    <br><hr>

    <table border="1" cellspacing="0">
        <tr>
            <td>1,1</td><td>1,2</td><td>1,3</td><td>1,4</td>
        </tr>
        <tr>
            <td>2,1</td><td rowspan="2" colspan="2" align="center">?</td><td>2,4</td>
        </tr>
        <tr>
            <td>3,1</td><td>3,4</td>
        </tr>
        <tr>
            <td>4,1</td><td>4,2</td><td>4,3</td><td>4,4</td>
        </tr>
    </table>
</body>
</html>