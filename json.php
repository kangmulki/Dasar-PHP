<?php

$mahasiswa = [
  'nama' => 'Nurul Huda',
  'domisili' => 'Surabaya'
];

echo json_encode($mahasiswa);

$listMahasiswaJSON = ' [
    { "nama": "Nurul Huda" },
    { "nama": "Renza Ilhami Risqi" },
    { "nama": "Taufan Aji" },
    { "nama": "Rahmad Dwi Oktanto" }
  ]';

//     // dikonversikan ke JSON
//   $list = json_decode($listMahasiswaJSON);

//     // tampilkan datanya
//     foreach($list as $key => $mahasiswa){
//         echo "Nama ke - {$key}: {$mahasiswa->nama} <br>";
//     }

?>