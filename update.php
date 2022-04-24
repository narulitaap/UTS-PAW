<?php
include "koneksi.php";
$id = $_POST["id_arin"];
$nama = $_POST["nama_arin"];
$email = $_POST["email_arin"];
$alamat = $_POST["alamat_arin"];

$sqli = "UPDATE tbl_arin SET nama_arin = '$nama',email_arin = '$email',alamat_arin = '$alamat' WHERE id_arin = $id";
$hasil = mysqli_query($koneksi, $sqli);
if(!$hasil){
    echo "Eksekusi update gagal";
}else{
    echo "Eksekusi update berhasil<br/>";
    echo "<a href='data_arin.php'>show data</a>";
}
?>