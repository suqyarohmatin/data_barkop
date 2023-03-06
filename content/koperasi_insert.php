<?php
include "library/config.php";
//menampung nilai variable $_POST
$tanggal=$_POST['tanggal' ];
$barang =$_POST['barang' ];
$jumlah=$_POST['jumlah'];
$beli =$_POST['beli'];
$jual =$_POST['jual'];
$laba  =$_POST['laba'];

//memasukkan data ke dalam database
$q="INSERT INTO data_barkop SET
tanggal = '$tanggal',
barang = '$barang',
jumlah = '$jumlah',
beli = '$beli',
jual = '$jual',
laba = '$laba'";

$query=mysqli_query($koneksi,$q);
//aksi jika query sukses maupun gagal
if ($query){
    //mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Data berhasil ditambah');
    window.location.href='?hal=koperasi_tampil';
    </script>";
} else {
//mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Data gagal ditambah');
    window.location.href='?hal=koperasi_tampil';
    </script>";
}
?>
