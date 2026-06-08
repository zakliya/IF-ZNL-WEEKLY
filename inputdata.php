<?php
    require 'koneksi.php';
    
    if(isset($_POST["submit"])){
        //ketika ada data yang terkitim tampilkan notif
        if(tambahdata($_POST)>0){
            echo "<script>
                alert('Data berhasil ditambahkan');
                window.location.href='mahasiswa.php';
            </script>";
        }else{
             echo "<script>
                alert('Data gagal ditambahkan');
                window.location.href='mahasiswa.php';
            </script>";
        }        
    }
?>
<html>
    <head>
        <title>INPUT DATA MAHASISWA | WEB INFORMATIKA C 2026</title>
    </head>
    <body>
        <h1>WEB INFORMATIKA C 2026</h1>
        <hr>
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <td><a href="index.php">Home</a></td>
                <td><a href="Profil.php">Profile</a></td>
                <td><a href="Contact.php">Contact</a></td>
                <td><a href="Mahasiswa.php">Data Mahasiswa</a></td>
            </tr>
        </table>
        
        <h2>Input Data Mahasiswa</h2>
        
        <form method="POST">
            <ul>
                <li>
                     <label for="nama_list">Nama   :</label>
                     <input type="text" name="nama" id="nama_list"/>
                </li>
                <li>
                    <label for="nim_list">NIM   :</label>
                    <input type="number" name="nim" id="nim_list"/>
                </li>
                <li>
                    <label for="jurusan_list">Program Studi   :</label>
                    <input type="text" name="jurusan" id="jurusan_list"/>
                </li>
                <li>
                    <label for="email_list">Email   :</label>
                    <input type="email" name="email" id="email_list"/>
                </li>
                <li>
                    <label for="nohp_list"> No HP</label>
                    <input type="number" name="no_hp" id="nohp_list">
                </li>
                <li>
                    <label for="foto_list">FOTO   :</label>
                    <input type="text" name="foto" id="foto_list"/>
                </li>
            </ul>
            <input type="submit" name="submitt" value="kirim nilai">
        </form>
        <hr>
        
        <form method="POST">
            <table>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td><input type="text" name="nama" id="nama" required/></td>
                </tr>
                <tr>
                    <td><label for="nim">NIM</label></td>
                    <td><input type="number" name="nim" id="nim" required/></td>
                </tr>
                <tr>
                    <td><label for="jurusan">Program Studi</label></td>
                    <td><input type="text" name="jurusan" id="jurusan" required/></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" name="email" id="email" required/></td>
                </tr>
                <tr>
                    <td><label for="nohp">No HP</label></td>
                    <td><input type="number" name="no_hp" id="nohp" required/></td>
                </tr>
                <tr>
                    <td><label for="foto">Foto</label></td>
                    <td><input type="text" name="foto" id="foto"/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="kirim nilai"></td>
                </tr>
            </table>
        </form>
        <hr>
        
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label for="website">Website Pribadi</label></td>
                    <td><input type="url" name="website" id="website"/></td>
                </tr>
                <tr>
                    <td><label for="tanggal">Tanggal</label></td>
                    <td><input type="date" name="tanggal" id="tanggal"/></td>
                </tr>
                <tr>
                    <td><label for="warna">Tipe Warna</label></td>
                    <td><input type="color" name="warna" id="warna" value="#ff0000"/></td>
                </tr>
                <tr>
                    <td><label for="kepuasan">Tingkat Kepuasan</label></td>
                    <td><input type="range" name="kepuasan" id="kepuasan"/></td>
                </tr>
                <tr>
                    <td><label>Jenis Kelamin</label></td>
                    <td>
                        <label><input type="radio" name="fav_language" value="laki-laki"/>laki-laki</label>
                        <label><input type="radio" name="fav_language" value="perempuan"/>perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td><label>Hobi</label></td>
                    <td>
                        <label><input type="checkbox" name="hobi" value="main game"/>main game</label>
                        <label><input type="checkbox" name="hobi" value="sepak bola"/>sepak bola</label>
                        <label><input type="checkbox" name="hobi" value="bisbol"/>bisbol</label>
                    </td>
                </tr>
                <tr>
                    <td><label for="foto_file">Foto</label></td>
                    <td><input type="file" name="foto" id="foto_file"/></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td><textarea name="alamat" id="alamat"></textarea></td>
                </tr>
                <tr>
                    <td><label for="jurusan_select">Jurusan</label></td>
                    <td>
                        <select name="jurusan" id="jurusan_select">
                            <option value="Informatika">Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Agribisnis">Agribisnis</option>
                            <option value="Statistika">Statistika</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submtit" value="kirim nilai"></td>
                </tr>
            </table>
        </form>
    </body>
</html>