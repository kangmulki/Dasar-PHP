<!DOCTYPE html>
<html>
<head>
 <title>Form Pengulangan</title>
</head>
    <body>
        <center>
    <h2>Form Pengulangan</h2>
    <!-- form -->
        <form method = "POST" action= "">
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td>1. Deret Bilangan Ganjil<br>
                        2. Segitiga Sama Kaki Terbalik<br>
                        3. Deret Bilangan Kelipatan 3<br>  
                    </td>
                </tr>
                <tr>
                    <td>Pilih</td>
                    <td>:</td>
                    <td><input type="text" name="pilih"></td>
                </tr>
                <tr>
                    <td>Masukkan Angka</td>
                    <td>:</td>
                    <td><input type="number" name="angka"></td>
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
 $pilih = $_POST['pilih'];
 $angka = $_POST['angka'];

 echo"<center><br>";
 if($pilih == 1){
     echo"Deret Bilangan Ganjil<br>";
        
        for ($i=1; $i <= $angka; $i++) { 
            if($i % 2 == 1){
                echo "<b>$i </b>";
            }
        }
 } 
 else if($pilih == 2){
    echo"Segitiga Sama Kaki Terbalik <br>";
    for($a=1; $a<=$angka; $a++){
        for($b=1; $b<=$a; $b++){
        	echo " ";
        }
        for($c=$angka; $c>=$a; $c-=1){
        	echo "<b>*</b> ";
        }
        echo "<br>";
    }
    
 }
 else if($pilih == 3){
    echo"Deret Bilangan Kelipatan 3<br>";

    for ($i=3; $i <= $angka; $i+=3) { 
            // $i += 3;
            echo "<b>$i </b>";
        
    }
 }
 else{
     echo"Pilihan Tidak Tersedia !";
 }

}