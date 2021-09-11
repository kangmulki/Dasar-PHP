<?php
// File json yang akan dibaca
$file = "movie.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Membaca/menampilkan data array menggunakan foreach
foreach ($data as $key => $d) {
    echo "No : ".$d['Title']."<br>";
    echo "<br>";
}

?>
