<?php

$data = [
            [
                'nama' => 'Olahraga',
                'jenis' =>
                  [
                       [
                          'nama2'   => 'Sepak Bola',
                          'artikel' => 
                            [
                                [
                                    'nama3' => 'Sepak Bola Nasional'
                                ],
                                [
                                    'nama3' => 'Sepak Bola Internasional'
                                ]
                            ]
                       ],

                       [
                           'nama2' => 'Bulu tangkis',
                           'artikel' =>[]
                       ],
                       [
                           'nama2' => 'Atletik',
                           'artikel' =>[]
                       ]
                  ]
            ],
            [
                'nama' => 'Ekonomi',
                'jenis' =>[]
            ],
            [
                'nama' => 'Politik',
                'jenis' =>[]
            ]
        ];

    echo "Artikel : Detik.com <br>";
    echo "Jenis Artikel : <br>";
    
    foreach($data as $data2){
        echo "-  ".$data2['nama']."<br>";
        
        foreach($data2['jenis'] as $data3){
            echo "<ul>";
            echo "<li>".$data3['nama2']."</li>";
            
            foreach($data3['artikel'] as $data4){
                echo "<ul>";
                echo "<li>".$data4['nama3']."</li>";
                echo "</ul>";

            }
        echo "</ul>";
        }
    }
    
?>