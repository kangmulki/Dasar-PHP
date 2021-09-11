<?php
    if(isset($_POST['simpan'])){
        $nis  = $_POST['nis'];
        $nama  = $_POST['nama'];
        $kelas  = $_POST['kelas'];
        $indo  = $_POST['indo'];
        $inggris  = $_POST['inggris'];
        $mtk  = $_POST['mtk'];
        $produktif  = $_POST['produktif'];
        $total=0;
        $rata=0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Data Siswa Kelas XII RPL</h2>
        <table border="1">
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Bahasa Indonesia</th>
                    <th>Bahasa Inggris</th>
                    <th>Matematika</th>
                    <th>Produktif</th>
                    <th>Total Nilai</th>
                    <th>Rata-rata</th>
                    <th>Status</th>
                </tr>
                <?php 
                    for($a=0; $a<count($nama); $a++){
                ?>
                <tr>
                    <td><?php echo $nis[$a];  ?></td>
                    <td><?php echo $nama[$a];  ?></td>
                    <td><?php echo $kelas[$a];  ?></td>
                    <td><?php echo $indo[$a];  ?></td>
                    <td><?php echo $inggris[$a];  ?></td>
                    <td><?php echo $mtk[$a];  ?></td>
                    <td><?php echo $produktif[$a];  ?></td>
                    <td><?php echo 
                        $total = $indo[$a] + $inggris[$a] + $mtk[$a] + $produktif[$a];
                        $total;  ?></td>
                    <td><?php echo 
                        $rata = $total / 4;
                        $rata;  ?></td>
                    <td><?php 
                        if ($rata >= 75 && $rata <= 100){
                            $status = "Lulus";
                        }else {
                            $status = "Tidak Lulus";
                        }
                        echo $status;  }?></td>         

                </tr>
                
        </table>
    </center>
    </body>
</html>
        
