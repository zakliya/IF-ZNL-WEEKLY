<html>
    <head>
            <title>INPUTDATAMAHASISWA | WEB INFORMATIKA C 2026</title>
    </head>
    <body>
        <h1>WEB INFORMATIKA C 2026</h1>
        <hr>
        <table border="1" cellspacing="0" cellpadding="5">
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
        <H2>Input Data Mahasiswa</H2>
        <form >
            <ul>
                <li>
                     <label for="nama">Nama   :</label>
                     <input type="text" name="nama" id="nama"/>
                </li>
                <li>
                    <label for="uts">UTS   :</label>
                    <input type="number" name="uts" id="uts"/>
                </li>
                <li>
                    <label for="uas">UAS   :</label>
                    <input type="number" name="uas" id="uas"/>
                </li>
                <li>
                    <label for="tugas">Tugas   :</label>
                    <input type="number" name="tugas" id="tugas"/>
                </li>
                <li>
                    <label for="foto">FOTO   :</label>
                    <input type="file" name="foto" id="foto"/>
                </li>
            </ul>
            <input type="submit" name="submit" value="kirim nilai">
        </form>
        <hr>
        <form>
            <table>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td><input type="text" name="nama" id="nama"/></td>
                </tr>
                <tr>
                    <td><label for="uts">UTS</label></td>
                    <td><input type="number" name="uts" id="uts"/></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" name="password" id="password" required/></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" name="email" id="email"/></td>
                </tr>
                <tr>
                    <td><label for="telpon">No HP</label></td>
                    <td><input type="tel" name="telpon" id="telpon"/></td>
                </tr>
                <tr>
                    <td><label for="website">Website Pribadi</label></td>
                    <td><input type="url" name="website" id="website"/></td>
                </tr>
                <tr>
                    <td><label for="tanggal"></label></td>
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
                    <td><label for="jenis kelamin">Jenis Kelamin</label>
                    <label for="jenis kelamin"><input type="radio" name="fav_language" id="jenis kelamin" value="laki-laki"/>laki=laki</label>
                    <label for="jenis kelamin"><input type="radio" name="fav_language" id="jenis kelamin" value="perempuan"/>perempuan</label></td>
                </tr>
                <tr>
                    <td><label for hobi>Hobi</label><br>
                    <label for="hobi"><input type="checkbox" name="hobi" id="hobi" value="main game"/>main game</label>
                    <label for="hobi"><input type="checkbox" name="hobi" id="hobi" value="sepak bola"/>sepak bola</label>
                    <label for="hobi"><input type="checkbox" name="hobi" id="hobi" value="bisbol"/>bisbol</label></td>
                </tr>
                <tr>
                    <td><label for="foto">Foto</label></td>
                    <td><input type="file" name="foto" id="foto"/></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td><textarea name="alamat" id="alamat"></textarea></td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan</label>
                    <select name="jurusan" id="jurusan">
                        <option value="Informatika">Informatika</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknil Elektro">Teknil Elektro</option>
                        <option value="Agribisnis">Agribisnis</option>
                        <option value="Statistika">Statistika</option>
                    </select></td>
                </tr>
                <input type="submit" name="submit" value="kirim nilai">
            </ul>
        </form>
    </body>
</html>