<?php 
$jenis ="Makanan";
$menu  ="Nasi Goreng";
$jumlah = 6;

    if($jenis == "Makanan"){
        
        if($menu == "Nasi Goreng"){
            echo"Jenis Pesanan : $jenis<br>";
            echo"Nama  Pesanan : $menu<br>";
            echo"Jumlah        : $jumlah<br>";
            $harga_nasi = 10000;
            $total = $harga_nasi * $jumlah;
            echo"Total : $total<br>";
            if($total >= 50000){
                $diskon = $total * 0.2;
                echo "Diskon 20% : $diskon<br>";
            }
            $total_bayar = $total - $diskon;
            echo"Total Bayar : $total_bayar";
        }

        else if($menu == "Mie Goreng"){
            echo"Kamu pilih Mie goreng";
        }
        else if($menu == "Ayam Goreng"){
            echo"Kamu pilih Ayam goreng";
        }
        else{
            echo "Menu Tidak Ada";
        }
    }







    else if($jenis == "Minuman"){
        echo"Ini Menu Minuman";
    }
    else{
        echo"Maaf Tidak Ada ";
    }
      
?>