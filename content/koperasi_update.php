<?php
include "library/config.php";
//menampung nilai variable $_POST
$id_barkop = $_POST['id_barkop'];
$nama = $_POST['nama' ];
$jumlah = $_POST['jumlah'];
$beli = $_POST['beli'];
$jual = $_POST['jual'];
$laba = $_POST['laba'];

//memasukkan data ke dalam database
$q="UPDATE data_barkop SET
nama = '$nama',
jumlah = '$jumlah',
beli = '$beli',
jual = '$jual',
laba = '$laba'
WHERE id_barkop= '$id_barkop'
   ";


$query = mysqli_query($koneksi,$q);

if ($query){
    //mod :menambah alert jika query berhasil
    echo "<script>
    window.alert('data berhasil diperbarui');
    window.location.href='?hal=koperasi_tampil';
    </script>";
}else{
    //mod :menambah alert jika query gagal
    echo "<script>
    window.alert('data gagal diperbarui');
    window.location.href='?hal=koperasi_tampil';
    </script>";
}
?>