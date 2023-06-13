<?php 
include "connection.php";

$idproduk = mysqli_real_escape_string($con,$_GET['id']);

$qry = mysqli_query($con,"SELECT * FROM produk WHERE idproduk='$idproduk' ");
$row = mysqli_fetch_array($qry);
if(!empty($row['foto']))
{
    unlink("./images/produk/$row[foto]");//hapus file foto
}

$sql = "DELETE FROM produk WHERE idproduk='$idproduk' ";
mysqli_query($con,$sql);

$url   = "tabel.php";
$pesan = "Data berhasil dihapus";

echo "<script> alert('$pesan'); location='$url'; </script>";

?>