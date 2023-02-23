<?php
if (!defined('INDEX')) die("");

$halaman=[
    "dashboard",
    "tentang",
    // menu santri
    "santri_tampil",
    "santri_tambah",
    "santri_insert",
    "santri_edit",
    "santri_update",
    "santri_delete",
    "santri_tampil1",
    "santri_tambah1",
    "santri_insert1",
    "santri_edit1",
    "santri_update1",
    "santri_delete1",
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
