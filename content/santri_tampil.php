 <section class="content-header">
<h1><center>DATA BARKOP</center></h1>
</section>
<!-- Main content -->
<section class="content">
 <div class="row">
     <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
<!--              <h3 class="box-title">Data Table With Full Features</h3>-->
                <a class="btn btn-md btn-info" href="?hal=santri_tambah"> Tambah Barang</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Jumlah</th>
                  <th>Beli</th>
                  <th>Jual</th>
                  <th>Laba</th>
                </tr>
                </thead>
                <tbody>
<?php
$tampil = "SElECT * FROM data_barkop";
$query = mysqli_query($koneksi,$tampil);
$no=0;
while ($data = mysqli_fetch_array($query)) {
 //        var_dump($data);
 $no++;
?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $data['tanggal']; ?></td>
                  <td><?= $data['nama']; ?></td>
                  <td><?= $data['jumlah']; ?></td>
                  <td><?= $data['beli']; ?></td>
                  <td><?= $data['jual']; ?></td>
                  <td><?= $data['laba']; ?></td>
                    <td>
                        <!-- Modifikasi tombol edit dan hapus-->
                        <a class="btn btn-sm btn-warning" href="?hal=santri_edit&id=<?= $data['id_barkop'] ?>"> Edit </a>
                        <a class="btn btn-sm btn-danger" href="?hal=santri_delete&id=<?= $data['id_barkop'] ?>"> Hapus </a>

                    </td>
                </tr>
<?php
}
?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
     </div>
 </div>

</section>
