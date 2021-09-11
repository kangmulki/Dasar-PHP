<?php

$url = "https://api.kawalcorona.com/indonesia/provinsi/";
// persiapkan curl / init curl
$ch = curl_init();
// set url
curl_setopt($ch, CURLOPT_URL, $url);
// return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $output contains the output string
$dataCovid = curl_exec($ch);
// tutup curl
curl_close($ch);
// menampilkan hasil curl
// echo $output;
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
    <h1><i> Data Covid-19</i></h1>
    <h4><i> di Indonesia berdasarkan Provinsi</i></h4>
    <h4><i> </i></h4>
    <table border="1">
        <tr>
            <th>Kode Provinsi</th>
            <th>Nama Provinsi</th>
            <th>Jumlah Positif</th>
            <th>Jumlah Sembuh</th>
            <th>Jumlah Meninggal</th>
        </tr>
        <?php
        $data = json_decode($dataCovid);
            foreach ($data as $covid) {
        ?>
        <tr>
            <td><center><?php  echo $covid->attributes->Kode_Provi; ?></center> </td>
            <td><?php  echo $covid->attributes->Provinsi; ?></td>
            <td><?php  $positif = number_format($covid->attributes->Kasus_Posi,0,",","."); 
                       echo $positif; ?></td>
            <td><?php  $sembuh = number_format($covid->attributes->Kasus_Semb,0,",",".");
                       echo $sembuh ?></td>
            <td><?php  $meninggal = number_format($covid->attributes->Kasus_Meni,0,",",".");
                       echo $meninggal; ?></td>
        </tr>
        <?php
             }
        ?>
    </table>
</center>
</body>
</html>