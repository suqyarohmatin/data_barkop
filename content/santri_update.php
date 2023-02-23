<?php
include "library/config.php";
//menampung nilai variable $_POST
$nama = $_POST[' nama' ];
$jumlah = $_POST['jumlah '];
$beli = $_POST['beli'];
$jual = $_POST['jual'];
$laba = $_POST['laba'];

//memasukkan data ke dalam database
$q="INSERT INTO data_barkop SET
nama = '$nama',
jumlah = '$jumlah',
beli = '$beli',
jual = '$jual',
laba = '$laba'";

$tampil = "SELECT * FROM santri_tampil";
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