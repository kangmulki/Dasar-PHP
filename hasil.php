
<?php
if(isset($_POST['simpan'])){
 $nama = $_POST['nama'];
 $umur = $_POST['umur'];
 $alamat = $_POST['alamat'];

echo "========== Biodata Diri ==========<br>";
echo "==============================<br>";
echo "nama   = $nama <br>";
echo "umur   = $umur <br>";
echo "alamat = $alamat";
}
 ?>