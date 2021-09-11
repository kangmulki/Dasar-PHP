<!DOCTYPE html>
<html>
<head>
 <title>Form Pengulangan</title>
</head>
    <body>
        <center>
    <h2>Syarat Masuk Ke MIKO MALL </h2>
    <!-- form -->
        <form method = "POST" action= "">
            <table>
                <tr>
                    <td>Nama Anda</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>:</td>
                    <td><input type="number" name="umur"></td>
                </tr>
                <tr>
                    <td>Status Vaksin</td>
                    <td>:</td>
                    <td>
                        <select name="status">
                            <option value="">---- Status Vaksin ----</option>
                            <option value="Sudah Vaksin">Sudah Vaksin</option>
                            <option value="Belum Vaksin">Belum Vaksin</option>
                        </select>
                    </td>
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
 $umur = $_POST['umur'];
 $status = $_POST['status'];

 echo"<center><table><br>";

        echo"<tr>";
        echo"<td>Nama Anda</td>";
        echo"<td>:</td>";
        echo"<td>$nama</td>";
        echo"</tr>";

        echo"<tr>";
        echo"<td>Umur</td>";
        echo"<td>:</td>";
        echo"<td>$umur</td>";
        echo"</tr>";

        echo"<tr>";
        echo"<td>Status Vaksin</td>";
        echo"<td>:</td>";
        echo"<td>$status</td>";
        echo"</tr>";

         echo"</table>";

            if($umur >= 12 || $umur <= 50){
                if($status == "Sudah Vaksin"){
                    
                    echo"<b><i><h3>Diizinkan</h3></b></i>";
                }
                else if($status == "Belum Vaksin"){
                    
                    echo"<b><i><h3>Tidak Diizinkan</h3></b></i>";
                    echo"<a href='https://pedulilindungi.id/'>Silahkan Daftar Vaksin</a>";
                }
            }
            else{
                echo"Tidak Memenuhi Syarat ";
            } 
    }

?>