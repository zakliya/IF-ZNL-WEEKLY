<?php
    echo "hello word";
    $nama = "zakliya";
    echo "<br>";
    echo "Nama Saya $nama";
    echo "<br>";
    echo "hai $nama";
    $koneksi = mysqli_connect("localhost", "root", "", "weeklyzakliya");
    if(!$koneksi){
        echo mysqli_connect_error($koneksi);
    }else{
        echo "koneksi berhasil !!!!";
    }
    echo "<br>";
    $query = "SELECT * FROM mahasiswa";
    $result =  mysqli_query($koneksi, $query);
    var_dump($result);
    // echo "<br>";
    // $mhs = mysqli_fetch_row($result);
    // var_dump($mhs[1]);
    // echo "<br>";
    // var_dump($mhs);
    // echo "<br>";
    $mhsa = mysqli_fetch_assoc($result);
    // var_dump($mhsa);
    // var_dump($mhsa['nama']);
    
?>


<!DOCTYPE html>
<html lang="en">
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
                <td >
                    <a href="index.php">Home</a>
                </td>
                <td>
                    <a href="Profil.php">Profile</a>
                </td>
                <td>
                    <a href="Contact.php">Contact</a>
                </td>
                <td><a href="Mahasiswa.php">Data Mahasiswa</a></td>
            </tr>
        </table>
        <h3>Data Mahasiswa</h3>
        <a href="inputdata.html"><button>Tambah Data Mahasiswa</button></a>
        <hr>
        <table class="table">
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Nama</th>
                <th colspan="3" align="center">Nilai</th>
                <th rowspan="2">Foto</th>
                <!-- <td>Baris 1 Kolom 2</td> -->
            </tr>
            <tr>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
            </tr>
            <?php
            // 3. PROSES FRONTEND: Looping Data ke dalam Tabel HTML
            $no = 1; // Variabel bantuan untuk membuat nomor urut otomatis
            
            // mysqli_fetch_assoc mengubah data dari database menjadi Array Asosiatif (key-nya adalah nama kolom database)
            while ($mhsa = mysqli_fetch_assoc($result)) {
        ?>
        
        <tr>
            <td align="center"><?= $no; ?></td>
            <td><?= $mhsa['nama']; ?></td>
            <td align="center"><?= $mhsa['nim']; ?></td>
            <td align="center"><?= $mhsa['jurusan']; ?></td>
            <td><?= $mhsa['email']; ?></td>
            <td><?= $mhsa['no_hp']; ?></td>
            <td align="center">
                <img src="Aset/ronaldo.webp<?= $mhsa['foto']; ?>" width="70" height="70" alt="Foto <?= $mhsa['nama']; ?>" style="object-fit: cover; border-radius: 5px;">
            </td>
        </tr>

        <?php
                $no++; // Tambahkan 1 ke nomor urut setiap kali baris baru dibuat
            } // Penutup dari blok while
        ?>
            <tr>
                <td>1</td>
                <td>Zakliya</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td><img src="Aset/Gambar/ronaldo.webp" height="75"/></td>
            </tr>
            
            <tr>
                <td>2</td>
                <td>Ujang</td>
                <td>50</td>
                <td>25</td>
                <td>60</td>
                <td><img src="https://biografieonline.it/img/bio/Mario_Balotelli_2.jpg" height="75"></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Luby</td>
                <td>45</td>
                <td>75</td>
                <td>80</td>
                <td><img src="https://i.pinimg.com/736x/a7/e6/28/a7e6280c61ff034fecc98313413907cc.jpg"  height="80" width="75"></td>
            </tr>
            
        </table>
        <hr>
        <table border="1" cellspacing="0">
            <tr>
                <td>1,1</td>
                <td>1,2</td>
                <td>1,3</td>
                <td>1,4</td>
            </tr>
            <tr>
                <td>2,1</td>
                <td rowspan="2" colspan="2" align="center">?</td>
                <td>2,4</td>
            </tr>
            <tr>
                <td>3,1</td>
                <td>3,4</td>
            </tr>
            <tr>
                <td>4,1</td>
                <td>4,2</td>
                <td>4,3</td>
                <td>4,4</td>
            </tr>
        </table>
</body>
</html>