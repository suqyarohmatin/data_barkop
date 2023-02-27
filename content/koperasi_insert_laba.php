<?php
// var_dump($_POST);
include "library/config.php";
//menampung nilai variable $_POST

//$nama = $_POST['nama'];
//$jk = $_POST['jk'];
//$id_jenjang = $_POST['id_jenjang'];
//$setor = $_POST['setor'];
//$tarik = $_POST['tarik'];

$id_barkop = $_POST['id_barkop'];
$laba = $_POST['laba'];


// kode lama
// if ($kode_tr=="1"){
//     $q="INSERT INTO transaksi SET
// tanggal='$tanggal',
// id_nasabah='$id_nasabah',
// kode_tr='$kode_tr',
// setor='$nominal'";
// } elseif ($kode_tr=="2"){
//     $q="INSERT INTO transaksi SET
// tanggal='$tanggal',
// id_nasabah='$id_nasabah',
// kode_tr='$kode_tr',
// tarik='$nominal'";
// }
$laba="SElECT laba from data_barkop WHERE id_barkop='$id_barkop'";
$query_laba=mysqli_fetch_row(mysqli_query($koneksi,$laba));
$laba_Awal= $query_laba[0];


$query_koperasi_tampil="INSERT INTO koperasi_tampil SET
id_barkop='$id_barkop',
laba='$laba'";
$query1=mysqli_query($koneksi,$query_koperasi_tampil);



$query_laba="UPDATE data_barkop SET laba=$jual - $beli WHERE id_barkop=$id_barkop";
$query2=mysqli_query($koneksi,$query_laba);

//aksi jika query sukses maupun gagal
if ($query1 && $query2){
    //mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Alhamdulillah, transaksi penarikan berhasil');
    window.location.href='?hal=koperasi_tampil';
    </script>";
} else {
//mod : menambah action alert jika query berhasil
    echo "<script>
window.alert('Maaf, transaksi penarikan gagal');
    window.location.href='?hal=koperasi_tampil';
    </script>";
}

?>