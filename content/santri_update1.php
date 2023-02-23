<?php
include "library/config.php";
//menampung nilai variable $_POST
$barang = $_POST[' barang' ];
$jumlah = $_POST['jumlah '];
$beli = $_POST['beli'];
$jual = $_POST['jual'];
$keluar =$_POST['keluar'];
$Sisa =$_POST['Sisa'];
$jumbel =$_POST['jumbel'];
$jumal =$_POST['jumal'];
$laba = $_POST['laba'];

//memasukkan data ke dalam database
$q="INSERT INTO data_penitip SET
barang = '$barang',
jumlah = '$jumlah',
beli = '$beli',
jual = '$jual',
keluar = '$keluar',
Sisa = '$Sisa',
jumbel = '$jumbel',
jumal = '$jumal',
laba = '$laba'";

$tampil = "SELECT * FROM santri_tampil1";
$query = mysqli_query($koneksi,$tampil);

if ($query){
    //mod :menambah alert jika query berhasil
    echo "<script>
    window.alert('data berhasil diperbarui');
    window.location.href='data_barkop.php';
    </script>";
}else{
    //mod :menambah alert jika query gagal
    echo "<script>
    window.alert('data gagal diperbarui');
    window.location.href='data_barkop.php';
    </script>";
}
?>