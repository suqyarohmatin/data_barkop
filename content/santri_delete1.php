<?php
include "library/config.php";
//menghapus data sesuai id_siswa yang dipilih
$q = "DELETE FROM data_penitip WHERE id_barang='$_GET[id]'";
$query = mysqli_query($koneksi,$q);

if ($query){
// mod : menambah alert jika query berhasil
    echo "<script>
    window.alert('Data berhasil dihapus');
    window.location.href='?hal=santri_tampil1';
    </script>";
} else {
// mod : menambah alert jika query gagal
    echo "<script>
    window.alert('Data gagal dihapus');
    window.location.href='?hal=santri_tampil1';
    </script>";
}
?>