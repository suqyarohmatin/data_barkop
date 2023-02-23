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
<form action="santri_tampil.php" method="post">
<ul>

<li>
    <input type="hidden" name="id_barkop" value="<?= $data['id_barkop'] ?>">
    <label for="tanggal">tanggal : </label>
    <input type="date" name="tanggal" id="tanggal" value="<?= $data['tanggal'] ?>"required></li><br>

<li>

    <label for="nama">nama : </label>
    <input type="text" name="nama" id="nama" value="<?= $data['nama'] ?>"required>

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
    <label for="laba">Laba : </label>
    <input type="text" name="laba" id="laba" value="<?= $data['laba'] ?>"required>
</li>
<br>

</ul>
    <!--Tombol simpan-->
    <div class="box-footer">
        <button type="submit" class="btn btn-success"href="?hal=santri_tampil">Simpan</button>
        <button type="reset" class="btn btn-warning">Reset</button>
        <a class="btn btn-danger" href="?hal=santri_tampil">Batal</a>
    </div>
</form>
</body>
</html>