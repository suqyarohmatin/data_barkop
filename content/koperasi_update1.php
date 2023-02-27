<?php
include "library/config.php";
//menampung nilai variable $_POST
$id_barang = $_POST['id_barang'];
$barang = $_POST['barang' ];
$jumlah = $_POST['jumlah'];
$beli = $_POST['beli'];
$jual = $_POST['jual'];
$keluar =$_POST['keluar'];
$Sisa =$_POST['sisa'];
$jumbel =$_POST['jumbel'];
$jumal =$_POST['jumal'];
$laba = $_POST['laba'];

//memasukkan data ke dalam database
$q="UPDATE data_penitip SET
barang = '$barang',
jumlah = '$jumlah',
beli = '$beli',
jual = '$jual',
keluar = '$keluar',
Sisa = '$Sisa',
jumbel = '$jumbel',
jumal = '$jumal',
laba = '$laba'
WHERE id_barang= '$id_barang'
    ";

$query = mysqli_query($koneksi,$q);

if ($query){
    //mod :menambah alert jika query berhasil
    echo "<script>
    window.alert('data berhasil diperbarui');
    window.location.href='?hal=koperasi_tampil1';
    </script>";
}else{
    //mod :menambah alert jika query gagal
    echo "<script>
    window.alert('data gagal diperbarui');
    window.location.href='?hal=koperasi_tampil1';
    </script>";
}
?>