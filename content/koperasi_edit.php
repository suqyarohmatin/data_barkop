<?php
include "library/config.php";

//mengambil data siswa dari database
$query = mysqli_query($koneksi,
    "SELECT * FROM data_barkop WHERE id_barkop='$_GET[id]'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit barang</title>
</head>
<body>
<h1>Edit barang</h1>
<hr>
<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
            <!--h3 class="box-title">Quick Example</h3 -->
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                <form action="?hal=koperasi_update" method="post" role="form">
                  <div class="box-body">
                  <div class="form-group">
                      <label for="id_barkop">id_barkop : </label>
                      <input type="text" name="id_barkop" id="id_barkop" value="<?= $data['id_barkop'] ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="tanggal">tanggal : </label>
                      <input type="date" class="timestamp" name="tanggal" id="tanggal" value="<?= $data['tanggal'] ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="nama">nama : </label>
                      <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['nama'] ?>" required>
                    </div>  
                   <div class="form-group">
                      <label for="jumlah">jumlah  : </label>
                      <input type="text" class="form-control" name="jumlah" id="jumlah" value="<?= $data['jumlah'] ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="beli"> beli </label>
                      <input type="text" class="form-control" name="beli" id="beli" value="<?= $data['beli'] ?>" required>
                    </div>                 
                    <div class="form-group">
                      <label for="jual"> Jual: </label>
                      <input type="text" class="form-control" name="jual" id="jual" value="<?= $data['jual'] ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="laba"> laba: </label>
                      <input type="text" class="form-control" name="laba" id="laba" value="<?= $data['laba'] ?>" required>
                    </div>
                    <div class="box-footer">
                         <button type="submit" class="btn btn-success">Simpan</button>
                         <button type="reset" class="btn btn-warning">Reset</button>
                         <a class="btn btn-danger" href="?hal=koperasi_tampil">Batal</a>
                    </div>
                  </div>
                </form>
            </div>
            </div>
          </div>
        </div>
</div>
</section>
</body>
</html>