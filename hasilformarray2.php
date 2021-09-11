<?php
    if(isset($_POST['simpan'])){
        $pilih  = $_POST['pilih'];
        $harga  = $_POST['harga'];
        $jumlah  = $_POST['jumlah'];
        $total=0;
        $total_bayar=0;
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
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>jumlah</th>
                    <th>Total</th>
                    
                </tr>
                <?php 
                    for($a=0; $a<count($pilih); $a++){
                ?>
                <tr>
                    <td><?php echo $pilih[$a];  ?></td>
                    <td><?php echo $harga[$a];  ?></td>
                    <td><?php echo $jumlah[$a];  ?></td>
                    <td><?php echo 
                        $total = $harga[$a] * $jumlah[$a];
                        $total_bayar += $total;
                        $total; } ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total Bayarx</td>
                    <td><?php
                        echo $total_bayar;  
                    ?></td>
                </tr>
                
        </table>
    </center>
    </body>
</html>
        
