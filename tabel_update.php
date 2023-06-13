<?php 
include "connection.php";

$idproduk = mysqli_real_escape_string($con,$_POST['idproduk']);
$barcode = mysqli_real_escape_string($con,$_POST['barcode']);
$namaproduk = mysqli_real_escape_string($con,$_POST['namaproduk']);
$harga = mysqli_real_escape_string($con,$_POST['harga']);
$deskripsi = mysqli_real_escape_string($con,$_POST['deskripsi']);

//update data teks
$sql = "UPDATE produk SET barcode='$barcode', namaproduk='$namaproduk',
                          harga='$harga', deskripsi='$deskripsi'
                          WHERE idproduk='$idproduk' ";
mysqli_query($con,$sql);


$foto_cek = $_FILES['foto']['name'];
if($foto_cek != "") {
    $folder   = "./images/produk"; //tempat di upload
    $foto_tmp = $_FILES['foto']['tmp_name']; //file yg diupload
    $foto_name= md5(date("YmdHis")); //nama foto yg baru
    $foto_split = explode(".",$foto_cek);//memecah nama foto 
    $ext  = end($foto_split);
    $foto = $foto_name.".".$ext;
    move_uploaded_file($foto_tmp, "$folder/$foto");

    //hapus foto lama
    $qry = mysqli_query($con,"SELECT * FROM produk WHERE idproduk='$idproduk' ");
    $row = mysqli_fetch_array($qry);
    if(!empty($row['foto']))
    {
        unlink("./images/produk/$row[foto]");//hapus file foto
    }

    //update foto baru
    $sql = "UPDATE produk SET foto='$foto' WHERE idproduk='$idproduk' ";
    mysqli_query($con,$sql);

}

$url   = "tabel.php";
$pesan = "Data berhasil diubah";

echo "<script> alert('$pesan'); location='$url'; </script>";

?>