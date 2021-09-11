<?php
// variable
//    $nama0="Andri";
//    $nama1="Joko";
//    $nama2="Sukma";
//    $nama3="Rina";
//    $nama4="Sari";

// penulisan array 1
// $nama = array("Andri","Joko","Sukma","Rina","Sari");

// penulisa array 2 / PHP v5.4
// $nama = ['Palah','Meylanu','Nabila','Cecep','Adzura'];

// echo $nama['1'];

//pembuatan array

// $buah = array(
//         "semangka",
//         "melon",
//         "anggur",
//         "strowbery",
//         "alpukat"
//     );

// $warna = array(
//         "Hijau",
//         "merah",
//         "ungu");
 
// //cara akses array
// echo "Buah ".$buah[3] ." Berwarna ".$warna[2];


// $arrWarna = array ("Blue","Black","Red","Yellow","Green"); 
// echo "Menampilkan isi array dengan for : <br>"; 

// for ($i=0; $i<count($arrWarna); $i++) { 
//  echo "Do you like <font color=$arrWarna[$i]>". $arrWarna[$i] 
// ."</font> ?<br>"; 
// } 
// echo "<br>Menampilkan isi array dengan foreach : <br>"; 
// foreach ($arrWarna as $warna) { 
//  echo "Do you like <font color=$warna>". $warna ."</font> 
// ?<br>"; 


// Array assosiatif 
// $arrNilai = array (
//     "Ani"  => 80, 
//     "Otim" => 90, 
//     "Ana"  => 75, 
//     "Budi" => 85
//     ); 
    
// echo $arrNilai['Ana'];
// echo " "; 
// echo $arrNilai['Otim'];

// array assosiatif 2
$employee = [];
$employee['name'] = 'John';
$employee['email'] = 'john@example.com';
$employee['phone'] = '1234567890';

echo "Nama : ".$employee['name']."<br>";
echo "Nama : ".$employee['email']."<br>";
echo "Nama : ".$employee['phone']."<br>";

?>
