<?php
include "koneksi.php";
$id = $_GET["id"];
$sql="DELETE FROM tbl_arin WHERE id_arin=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete Data Gagal";
}else{
    echo "Data berhasil di delete";
    echo "<a href ='data_arin.php'> Show data </a>";

}
?>