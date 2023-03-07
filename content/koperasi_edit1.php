<?php
include "library/config.php";

//mengambil data siswa dari database
$query = mysqli_query($koneksi,
    "SELECT * FROM data_penitip WHERE id_barang='$_GET[id]'");
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
                <form action="?hal=koperasi_update1" method="post" role="form">
                  <div class="box-body">
                  <div class="form-group">
                      <label for="id_barang">id_barang : </label>
                      <input type="text" name="id_barang" id="id_barang" value="<?= $data['id_barang'] ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="tanggal">tanggal : </label>
                      <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= $data['tanggal'] ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="barang">barang : </label>
                      <input type="text" class="form-control" name="barang" id="barang" value="<?= $data['barang'] ?>" required>
                    </div>  
                   <div class="form-group">
                      <label for="jumlah">jumlah  : </label>
                      <input type="text" class="form-control" name="jumlah" id="jumlah" value="<?= $data['jumlah'] ?>" required
                      onkeyup="cek_sisa();">
                    </div>
                    <div class="form-group">
                      <label for="beli"> beli </label>
                      <input type="text" class="form-control" name="beli" id="beli" value="<?= $data['beli'] ?>" required
                      onkeyup="cek_jumbel();"
                      >
                    </div>                 
                    <div class="form-group">
                      <label for="jual"> Jual: </label>
                      <input type="text" class="form-control" name="jual" id="jual" value="<?= $data['jual'] ?>" required
                      onkeyup="cek_jumal();"
                      >
                    </div>
                    <div class="form-group">
                      <label for="keluar"> keluar: </label>
                      <input type="text" class="form-control" name="keluar" id="keluar" value="<?= $data['keluar'] ?>" required
                      onkeyup="cek_jumbel(),cek_sisa(),cek_jumal()" 
                      >
                    </div>
                    <div>
                      <label for="sisa"> sisa: </label>
                      <input type="text" class="form-control" name="sisa" id="sisa" value="<?= $data['sisa'] ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="jumbel"> Jumbel: </label>
                      <input type="text" class="form-control"  name="jumbel" id="jumbel" value="<?= $data['jumbel'] ?>" required
                      onkeyup="cek_laba();"
                      >
                    </div>
                    <div class="form-group">
                      <label for="jumal"> Jumal: </label>
                      <input type="text" class="form-control" name="jumal" id="jumal" value="<?= $data['jumal'] ?>" required
                      onkeyup="cek_laba();"
                      >
                    </div>
                    <div class="form-group">
                      <label for="laba"> laba: </label>
                      <input type="text" class="form-control" name="laba" id="laba" value="<?= $data['laba'] ?>" required>
                    </div>
                    <div class="box-footer">
                         <button type="submit" class="btn btn-success">Simpan</button>
                         <button type="reset" class="btn btn-warning">Reset</button>
                         <a class="btn btn-danger" href="?hal=koperasi_tampil1">Batal</a>
                    </div>
                  </div>
                </form>
            </div>
            </div>
          </div>
        </div>
</div>
</section>

<script>
function cek_sisa() {
      var txtFirstNumberValue = document.getElementById('jumlah').value;
      var txtSecondNumberValue = document.getElementById('keluar').value;
      var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('sisa').value = result;
      }
}
</script>
<script>
function cek_jumbel() {
      var txtFirstNumberValue = document.getElementById('beli').value;
      var txtSecondNumberValue = document.getElementById('keluar').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('jumbel').value = result;
      }
}

</script>
<script>
function cek_jumal() {
      var txtFirstNumberValue = document.getElementById('jual').value;
      var txtSecondNumberValue = document.getElementById('keluar').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('jumal').value = result;
      }
}

</script>
<script>
function cek_laba() {
      var txtFirstNumberValue = document.getElementById('jumbel').value;
      var txtSecondNumberValue = document.getElementById('jumal').value;
      var result = parseInt(txtSecondNumberValue) - parseInt(txtFirstNumberValue);
      if (!isNaN(result)) {
         document.getElementById('laba').value = result;
      }
}
</script>

</body>
</html>