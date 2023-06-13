<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Data</title>
</head>
<body>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Barang</h6>
        </div>
        
        <form action="tabel_insert.php" method="post" enctype="multipart/form-data">
        
        <div class="card-body">
            <div class="form-group">
                <label>Barcode:</label>
                <input type="text" name="barcode" class="form-control" placeholder="Masukan barcode" required>
            </div>
            
            <div class="form-group">
                <label>Nama Produk:</label>
                <input type="text" name="namaproduk" class="form-control" placeholder="Masukan Nama Produk" required>
            </div>
            
            <div class="form-group">
                <label>Deskripsi:<sup class="text-danger">*Kosongkan jika tidak ada deskripsi</sup></label>
                <textarea name="deskripsi" class="form-control" rows="5"></textarea>
            </div>
            
            <div class="form-group">
                <label>Harga:</label>
                <input type="number" name="harga" class="form-control" placeholder="Masukan Harga Produk" required>
            </div>
            
            <div class="form-group">
                <label>Foto:<sup class="text-danger">*Kosongkan jika tidak ada foto</sup></label>
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