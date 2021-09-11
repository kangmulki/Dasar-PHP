<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>
    

    <form action="" method="post">
        <h2>Menu Makanan & Minuman di Restoran</h2>
        <table>
            <tr>
                <td>Nama Pemesan</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jumlah Pesanan</td>
                <td>:</td>
                <td><input type="number" name="jumlah"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name ="proses" value="Proses"></td>
            </tr>
        </table> 
        <br>
    </form>


    <?php
    if(isset($_POST['proses'])){
        $nama = $_POST['nama'];
        $jumlah = $_POST['jumlah'];
    ?>
            <form action="hasilformarray2.php" method="post">
                <table>
                    <?php
                        for($i=1; $i<=$jumlah;$i++){
                    ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Pesanan Ke - <?php echo $i; ?></td>
                    </tr> 
                    <tr>
                        <td>Pilih Paket</td>
                        <td>:</td>
                        <td><input type="text" name="pilih[]"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td><input type="number" name="harga[]"></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>:</td>
                        <td><input type="number" name="jumlah[]"></td>
                    </tr>
                    
                    
            <?php
            }
            ?>
            <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="simpan" value="Simpan" /></td>
                    </tr>  
                </table>
            </form>
    <?php
        }
    ?>
 </body>
</center>
</html>