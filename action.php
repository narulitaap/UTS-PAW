<?php
include "koneksi.php";
$nama = $_POST["nama_arin"];
$email = $_POST["email_arin"];
$alamat = $_POST["alamat_arin"];

$sqli = "INSERT INTO tbl_arin VALUES(null,'$nama','$email','$alamat')";
$hasil = mysqli_query($koneksi, $sqli);
if(!$hasil){
    echo "Eksekusi tambah gagal";
}else{
    echo "Eksekusi tambah berhasil<br/>";
    echo "<a href='data_arin.php'>show data</a>";
}
?>