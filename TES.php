<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form nilai</title>
</head>
<body>
    <form action="" method="POST">
    <h3>Menentukan Bilangan Ganjil Genap</h3>
    Masukan Angka :
    <input type=text name="angka">
    <input type="submit" name="submit" value="submit"><br><br>
    <?php
    if (isset($_POST ['submit'])){
        $angka = $_POST['angka'];


       
    }
    ?>
    </form>
</body>
</html>