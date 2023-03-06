<?php
if (!defined('INDEX')) die("");

$halaman=[
    "dashboard",
    "tentang",
    // menu santri
    "koperasi_tampil",
    "koperasi_tambah",
    "koperasi_insert",
    "koperasi_edit",
    "koperasi_update",
    "koperasi_delete",
    "koperasi_tampil1",
    "koperasi_tambah1",
    "koperasi_insert1",
    "koperasi_edit1",
    "koperasi_update1",
    "koperasi_delete1",
];
if(isset($_GET['hal'])) $hal = $_GET['hal'];
else $hal = "dashboard";

foreach($halaman as $h){
    if($hal == $h){
        include "content/$h.php";
        break;
    }
}
?>
