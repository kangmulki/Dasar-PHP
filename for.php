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
                    <td>Masukkan Angka</td>
                    <td>:</td>
                    <td><input type="text" name="angka"></td>
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
	$angka = $_POST['angka'];

	echo"Bilangan Terbesar ke Terkecil : <br>";
for ($i=$angka; $i >= 1; $i--) { 
			echo "$i ";
	}

	echo "<br>";
	echo "<br>";
	echo"Bilangan Genap : <br>";
for ($i=1; $i <= $angka; $i++) { 
    if($i % 2 == 0){
        echo "$i ";
    }
}

	echo"<br>";
	echo"<br>";
	echo"Segitiga : <br>";
for ($i=1; $i <= $angka; $i++) { 
    for ($a=1; $a <= $i; $a++) { 
        echo " *";
    }
    echo " <br>";
}

    echo"<br>";
	echo"<br>";
	echo"Segitiga Terbalik : <br>";
	for($a=1; $a<=$angka; $a++){
	for($c=$angka; $c>=$a; $c-=1){
		echo " *";
	}
	echo "<br>";
	}
    
	echo"<br>";
	echo"<br>";
	echo"Segitiga Sama Kaki: <br>";

	for($a=1; $a<=$angka; $a++){
	for($b=$angka; $b>=$a; $b-=1){
		echo "&nbsp";
	}
	for($c=1; $c<=$a; $c++){
		echo "*";
	}
	echo "<br>";
	}
    // // sama kaki kebalik
	// for($a=1; $a<=$star; $a++){
	// for($b=1; $b<=$a; $b++){
	// 	echo "&nbsp";
	// }
	// for($c=$star; $c>=$a; $c-=1){
	// 	echo "*";
	// }
	// echo "<br>";
	// }

}
?>