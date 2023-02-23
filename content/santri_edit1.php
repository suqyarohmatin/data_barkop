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
<form action="santri_update1.php" method="post">
<ul>

<li>
    <input type="hidden" name="id_barang" value="<?= $data['id_barang'] ?>">
    <label for="tanggal">tanggal : </label>
    <input type="date" name="timestamp" id="tanggal" value="<?= $data['tanggal'] ?>"required>

</li><br>
<li>
    <label for="barang">barang : </label>
    <input type="text" name="barang" id="barang" value="<?= $data['barang'] ?>"required>
</li><br>
<li>
    <label for="jumlah">jumlah  : </label>
    <input type="text" name="jumlah" id="jumlah" value="<?= $data['jumlah'] ?>"required>
</li>
<br>
<li>
    <label for="beli"> beli </label>
    <input type="text" name="beli" id="beli" value="<?= $data['beli'] ?>"required>
</li>
<br>
<li>
    <label for="jual"> Jual: </label>
    <input type="text" name="jual" id="jual" value="<?= $data['jual'] ?>"required>
</li>  
<br>
<li>
    <label for="keluar"> keluar: </label>
    <input type="text" name="keluar" id="keluar" value="<?= $data['keluar'] ?>"required>
</li>        
<br>
<li>
    <label for="sisa"> sisa: </label>
    <input type="text" name="sisa" id="sisa" value="<?= $data['sisa'] ?>"required>
</li>        
<br>
<li>
    <label for="jumbel"> Jumbel: </label>
    <input type="text" name="jumbel" id="jumbel" value="<?= $data['jumbel'] ?>"required>
</li> 
<br>
<li>
    <label for="jumal"> Jumal: </label>
    <input type="text" name="jumal" id="jumal" value="<?= $data['jumal'] ?>"required>
</li>                     
<br>
<li>
    <label for="laba">Laba : </label>
    <input type="text" name="laba" id="laba" value="<?= $data['laba'] ?>"required>
</li>
<br>

</ul>

<div class="box-footer">
        <button type="submit" class="btn btn-success"><href="?hal=santri_tampil">Simpan</button>
        <button type="reset" class="btn btn-warning">Reset</button>
        <a class="btn btn-danger" href="?hal=santri_tampil">Batal</a>
    </div>

</form>
</body>
</html>