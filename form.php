<!DOCTYPE html>
<html>
<head>
 <title>Form Biodata Diri</title>
</head>
    <body>
        <center>
    <h2>Form Biodata Diri</h2>
    <!-- form -->
        <form method = "POST" action= "">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type='text' name='nama'></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type='text' name="tempat_lahir"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type='date' name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type='radio' name="jenis_kelamin">Laki-laki
                        <input type='radio' name="jenis_kelamin">Perempuan </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" cols="20" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><select name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Konghuchu">Konghuchu</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td><select name="pendidikan_terakhir">
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA/SMK">SMA/SMK</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><select name="status">
                            <option value="Sudah Menikah">Sudah Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Duda">Duda</option>
                            <option value="Janda">Janda</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td>
                    <input type='checkbox' name = "hobi" value="Membaca">Membaca
                    <input type='checkbox' name = "hobi" value="Menulis">Menulis
                    <input type='checkbox' name = "hobi" value="Ngepush">Ngepush
                    </td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td><select name="cita_cita">
                            <option value="Programmer">Programmer</option>
                            <option value="Pilot">Pilot</option>
                            <option value="Presiden">Presiden</option>
                            <option value="Anggota DPR">Anggota DPR</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Kata-kata Bijak</td>
                    <td>:</td>
                    <td><textarea name="bijak" cols="20" rows="5"></textarea></td>
                </tr> 
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name ="simpan" value='KIRIM'></td>
                </tr>
            </table>  
        </form>
        </center>
    </body>
</html>

<?php
if(isset($_POST['simpan'])){
 $nama = $_POST['nama'];
 $tempat_lahir = $_POST['tempat_lahir'];
 $tanggal_lahir = $_POST['tanggal_lahir'];
 $jenis_kelamin = $_POST['jenis_kelamin'];
 $alamat = $_POST['alamat'];
 $agama = $_POST['agama'];
 $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
 $status = $_POST['status'];
 $hobi = $_POST['hobi'];
 $cita_cita = $_POST['cita_cita'];
 $bijak = $_POST['bijak'];

echo "========== Biodata Diri ==========<br>";
echo "==============================<br>";
echo "Nama   = $nama <br>";
echo "Tempat Lahir   = $tempat_lahir <br>";
echo "Tanggal Lahir = $tanggal_lahir";
}
 ?>