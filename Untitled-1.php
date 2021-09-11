<!DOCTYPE html>
<html>
<head>
 <title>Form Biodata Diri</title>
</head>
    <body>
        <center>
    <h2>Program Penggajihan</h2>
    <h2>PT. GARUDA KELINCI AKUR</h2>
    <!-- form -->
        <form method = "POST" action= "">
            <table>
                <tr>
                    <td>Nama Bendahara</td>
                    <td>:</td>
                    <td><input type='text' name='bendahara'></td>
                </tr>
                <tr>
                    <td>Nama Pekerja</td>
                    <td>:</td>
                    <td><input type='text' name='nama'></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type='radio' name="jk" value="Laki-laki">Laki-laki
                        <input type='radio' name="jk" value="Perempuan">Perempuan </td>
                </tr>
               <tr>
                    <td>Tanggal Gaji</td>
                    <td>:</td>
                    <td><input type='date' name="tanggal_gaji"></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><select name="jabatan">
                            <option value="">--- Pilih Jabatan ---</option>
                            <option value="Direktur">Direktur</option>
                            <option value="Manager">Manager</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="OB">OB</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td><select name="pendidikan">
                            <option value="">--- Pendidikan Terakhir ---</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Lembur</td>
                    <td>:</td>
                    <td><input type='text' name='lembur'>  Hari / Rp. 20.000</td>
                </tr>
                <tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td><input type='text' name='potongan'></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name ="simpan" value='KIRIM'></td>
                </tr>
            </table>  
        </form>
        </center>
    

<?php
if(isset($_POST['simpan'])){
 $bendahara = $_POST['bendahara'];
 $nama = $_POST['nama'];
 $jk = $_POST['jk'];
 $tanggal_gaji = $_POST['tanggal_gaji'];
 $jabatan = $_POST['jabatan'];
 $pendidikan = $_POST['pendidikan'];
 $lembur = $_POST['lembur'];
 $potongan = $_POST['potongan'];

    echo"<center><table>";
        
        echo"<h2>Struk Gaji Karyawan</h2>";

        echo"<tr>";
        echo"<td></td>";
        echo"<td></td>";
        echo"<td></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tanggal :</td>";
        echo"<td><b><i>$tanggal_gaji</b></i></td>";
        echo"</tr>";

        echo"<tr>------------------------------------------------------------------------------------------</tr>";

        echo"<tr>";
        echo"<td><h3><b><i>Gaji Pokok</b></i><h3></td>";
        echo"</tr>";

        echo"<tr>";
        echo"<td>Nama Karyawan</td>";
        echo"<td>:</td>";
        echo"<td>$nama</td>";
        echo"</tr>";

        echo"<tr>";
        echo"<td>Jenis Kelamin</td>";
        echo"<td>:</td>";
        echo"<td>$jk</td>";
        echo"</tr>";

        echo"<tr>";
        echo"<td>Pendidikan Terakhir</td>";
        echo"<td>:</td>";
        echo"<td>$pendidikan</td>";
        echo"</tr>";

        echo"<tr>";
        echo"<td>Jabatan</td>";
        echo"<td>:</td>";
        echo"<td>$jabatan</td>";
        echo"</tr>";

            if($jabatan == "Direktur"){
                $gaji = 10000000;
            }
            else if($jabatan == "Manager"){
                $gaji = 7500000;
            }
            else if($jabatan == "Karyawan"){
                $gaji = 5000000;
            }
            else if($jabatan == "OB"){
                $gaji = 2500000;
            }
            else{
                echo "tidak ada gaji";
            }

        echo"<tr>";
        echo"<td>Gaji</td>";
        echo"<td>:</td>";
        echo"<td>Rp. $gaji</td>";
        echo"</tr>";

        echo"<tr>";
        echo"<td><h3><b><i>Tunjangan</b></i><h3></td>";
        echo"</tr>";
        
            if($pendidikan == "SD"){
                $tunjangan = 200000;
            }
            else if($pendidikan == "SMP"){
                $tunjangan = 500000;
            }
            else if($pendidikan == "SMA"){
                $tunjangan = 1000000;
            }
            else if($pendidikan == "S1"){
                $tunjangan = 1500000;
            }
            else{
                echo "tidak ada tunjangan";
            }
        
        echo"<tr>";
        echo"<td>Tunjangan Pendidikan</td>";
        echo"<td>:</td>";
        echo"<td>Rp. $tunjangan</td>";
        echo"</tr>";

        $vakasi = 20000 * $lembur;

        echo"<tr>";
        echo"<td>Vakasi Lembur</td>";
        echo"<td>:</td>";
        echo"<td>Rp. $vakasi</td>";
        echo"</tr>";

        echo"<tr>";
        echo"<td><h3><b><i>Potongan</b></i><h3></td>";
        echo"</tr>";

        echo"<tr>";
        echo"<td>Potongan</td>";
        echo"<td>:</td>";
        echo"<td>Rp. $potongan</td>";
        echo"</tr>";

        $total_gaji = ($gaji + $tunjangan + $vakasi) - $potongan;
        echo"<tr>";
        echo"<td><b><i><h3>Total Gaji<h3></b></i></td>";
        echo"<td><b><i><h3>:</b></i></h3></td>";
        echo"<td><b><i><h3>Rp. $total_gaji</b></i></h3></td>";
        echo"</tr>";

        echo"<tr>";
        echo"<td></td>";
        echo"<td></td>";
        echo"<td></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bendahara : </td>";
        echo"<td>$bendahara</td>";
        echo"</tr>";


    echo"</center></table>";
 
    }
?>
</body>
</html>