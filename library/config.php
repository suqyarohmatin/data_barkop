<?php
//konfigurasi ke database
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "Barkop";

//mencoba koneksi ke database
$koneksi = mysqli_connect($host,$user,$pass,$db);

if (mysqli_connect_errno()) {
    echo "Koneksi Gagal: " . mysqli_connect_error();
}
//    echo " Koneksi Berhasil Gaiss.. &#127881";
?>




