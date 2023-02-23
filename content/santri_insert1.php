<?php
include "library/config.php";
//menampung nilai variable $_POST
$tanggal = $_POST[' tanggal' ];
$barang = $_POST[' barang' ];
$jumlah = $_POST['jumlah '];
$beli = $_POST['beli'];
$jual = $_POST['jual'];
$keluar = $_POST['keluar'];
$sisa = $_POST['sisa'];
$jumbel= $_POST['jumbel'];
$jumal = $_POST['jumal'];
$laba = $_POST['laba'];

//memasukkan data ke dalam database
$q="INSERT INTO data_penitip SET
tanggal = '$tanggal',
barang = '$barang',
jumlah = '$jumlah',
beli = '$beli',
jual = '$jual',
keluar= '$keluar',
sisa = '$sisa',
jumbel = '$jumbel',
jumal = '$jumal',
laba = '$laba'";

$query=mysqli_query($koneksi,$q);
//aksi jika query sukses maupun gagal
if ($query){
    //mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Data berhasil ditambah');
    window.location.href='?hal=santri_tampil1';
    </script>";
} else {
//mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Data gagal ditambah');
    window.location.href='?hal=santri_tampil1';
    </script>";
}
?>
