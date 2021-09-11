<?php
// File json yang akan dibaca
include('');
$file = "json3.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Membaca/menampilkan data array menggunakan foreach
foreach ($data as $key => $d) {
    echo "Nama : ".$d['nama']."<br>";
    echo "Domisili :".$d['domisili']."<br>";
    echo "Hobi : <ul>";
    foreach($d['hobi'] as $d2){  
        echo "<li>".$d2."</li>";
    }
    echo "</ul>";
    echo "<br>";
}

?>
