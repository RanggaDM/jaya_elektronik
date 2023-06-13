<?php
include "connection.php";
$idproduk = isset($_GET['id'])?$_GET['id']:"";
$idproduk = mysqli_real_escape_string($con,$idproduk);
$sql = "SELECT * FROM produk WHERE idproduk='$idproduk' ";
$query = mysqli_query($con,$sql);
$data  = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Barang</title>
</head>
<body>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Barang</h6>
        </div>
        
        <form action="tabel_update.php" method="post" enctype="multipart/form-data">
        
        <input type="hidden" name="idproduk" value="<?=$data['idproduk'];?>">
        
        <div class="card-body">
            <div class="form-group">
                <label>Barcode:</label>
                <input type="text" name="barcode" class="form-control" placeholder="Masukan barcode" required value="<?=$data['barcode'];?>">
            </div>
            
            <div class="form-group">
                <label>Nama Produk:</label>
                <input type="text" name="namaproduk" class="form-control" placeholder="Masukan Nama Produk" required value="<?=$data['namaproduk'];?>">
            </div>
            
            <div class="form-group">
                <label>Deskripsi:<sup class="text-danger">*Kosongkan jika tidak mengubah deskripsi</sup></label>
                <textarea name="deskripsi" class="form-control" rows="5"><?=$data['deskripsi'];?></textarea>
            </div>
        
            <div class="form-group">
                <label>Harga:</label>
                <input type="number" name="harga" class="form-control" placeholder="Masukan Harga Produk" required value="<?=$data['harga'];?>">
            </div>
        
            <div class="form-group">
                <label>Foto:<sup class="text-danger">*Kosongkan jika tidak mengubah foto</sup></label>
                <input type="file" name="foto" class="form-control">
            </div>
        </div>
        
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Simpan
            </button>
            <a href="tabel.php" class="btn btn-warning">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
        </form>

    </div>

</div>
</body>
</html>