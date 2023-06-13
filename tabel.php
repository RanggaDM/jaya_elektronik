<?php
    include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tabel Barang</title>
</head>
<body>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 text-center">Selamat Datang di Tabel Barang</h1>
        
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
            </div>

            <div class="card-body">
                <a href="index1.php" class="btn btn-warning" style="margin-left:85%;">
                    Kembali
                </a>
 
                <a href="tabel_tambah.php" class="btn btn-primary" style="float:left;margin-left:1%;">
                   <i class="fas fa-plus"></i> Tambah
                </a>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table_id" class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="50">No</th>
                                <th width="100">Barcode</th>
                                <th width="350">Nama Produk</th>
                                <th width="100">Deskripsi</th>
                                <th width="75">Harga</th>
                                <th width="100">Foto</th>
                                <th width="100">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                            $no  = 1;
                            $sql = "SELECT * FROM produk";
                            $query = mysqli_query($con,$sql);
                            while($row=mysqli_fetch_array($query))
                            {
                                $link_edit = "tabel_edit.php?id=$row[idproduk]";
                                $link_hapus= "tabel_delete.php?id=$row[idproduk]";

                                $foto = "default.jpg";
                                if($row['foto'] != "") { $foto = $row['foto']; }
                                $link_foto = "./images/produk/$foto";
                            ?>
                                <tr>
                                    <td><?=$no;?></td>
                                    <td><?=$row['barcode'];?></td>
                                    <td><?=$row['namaproduk'];?></td>
                                    <td><?=$row['deskripsi'];?></td>
                                    <td align="right"><?=$row['harga'];?></td>
                                    <td>
                                        <img src="<?=$link_foto;?>" width="75" height="75">
                                    </td>
                                    <td>
                                        <a href="<?=$link_edit;?>" class="btn btn-success">
                                            Edit
                                        </a>
                                        <a href="<?=$link_hapus;?>" class="btn btn-danger" onclick="return confirm('Apakah ingin menghapus data?');">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php 
                            $no++;
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>



<script type="text/javascript">
  $(document).ready(function () {
    $('#table_id').DataTable();
});
</script>
</body>
</html>