<?php 
include "connection.php";

$barcode = mysqli_real_escape_string($con,$_POST['barcode']);
$namaproduk = mysqli_real_escape_string($con,$_POST['namaproduk']);
$deskripsi = mysqli_real_escape_string($con,$_POST['deskripsi']);
$harga = mysqli_real_escape_string($con,$_POST['harga']);

$foto = "";
$foto_cek = $_FILES['foto']['name'];
if($foto_cek != "") {
    $folder   = "./images/produk"; //tempat di upload
    $foto_tmp = $_FILES['foto']['tmp_name']; //file yg diupload
    $foto_name= md5(date("YmdHis")); //nama foto yg baru
    $foto_split = explode(".",$foto_cek);//memecah nama foto 
    $ext  = end($foto_split);
    $foto = $foto_name.".".$ext;
    move_uploaded_file($foto_tmp, "$folder/$foto");
}

$sql = "INSERT INTO produk (barcode,namaproduk,deskripsi,harga,foto) 
            VALUES 
            ('$barcode','$namaproduk','$deskripsi','$harga','$foto')";
mysqli_query($con,$sql);

$url   = "tabel.php";
$pesan = "Data berhasil disimpan";

echo "<script> alert('$pesan'); location='$url'; </script>";

?>