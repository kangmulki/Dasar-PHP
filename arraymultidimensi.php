<?php
$data  = [
    [
        'nama' => "Palah",
        'buah' =>
        [
            [
               'nama' => "Anggur",
               'jenis'=>
                  [
                    ['nama_jenis' => 'Anggur Merah'],
                    ['nama_jenis' => 'Anggur Putih'],
                  ] 
            ]
        ],
    ],
    [
        'nama' => 'Meylani',
        'buah' =>
        [
            [
              "nama" => "Alpukat",
              'jenis'=>
                  [
                    ['nama_jenis' => 'Alpukat Mentega'],
                    ['nama_jenis' => 'Alpukat Biasa'],
                  ] 
            ],
            [
              "nama" => "Apel",
              'jenis'=>
                  [
                    ['nama_jenis' => 'Apel Merah'],
                    ['nama_jenis' => 'Apel Hijau'],
                  ] 
            ]
            
        ],
    ],
];

foreach ($data as $data2) {
    echo "Nama Pemilik : " . $data2['nama'] . "<br>";
    echo "Daftar Buah Kesukaan :";
    echo "<ul>";
    foreach ($data2['buah'] as $buah) {
        echo "<li>" . $buah['nama'] . "</li>";
        foreach ($buah['jenis'] as $buah2) {
          echo "<ul>" . $buah2['nama_jenis'] . "</ul>";
      }
    }
    echo "</ul>";

}
