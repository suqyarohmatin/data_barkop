<section class="content-header">
<h1><CENTER>DATA PENITIP</CENTER></h1>
</section>
<!-- Main content -->
<section class="content">
 <div class="row">
     <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
<!--              <h3 class="box-title">Data Table With Full Features</h3>-->
                <a class="btn btn-md btn-info" href="?hal=koperasi_tambah1"> Tambah Barang</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
              <div class="row">
        <div class="col-xs-12">
          
            <div class="box-header">
              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
                </div>
              
            </div>
                <thead>
                <tr>
                  <th>No</th>
                  <th>tanggal</th>
                  <th>barang</th>
                  <th>Jumlah</th>
                  <th>Beli</th>
                  <th>Jual</th>
                  <th>keluar</th>
                  <th>sisa</th>
                  <th>jumbel</th>
                  <th>jumal</th>
                  <th>laba</th>
                </tr>
                </thead>
                
<?php
$tampil = "SElECT * FROM data_penitip";
$query = mysqli_query($koneksi,$tampil);
$no=0;
while ($data = mysqli_fetch_array($query)) {
 //var_dump($data);
 $no++;
?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $data['tanggal']; ?></td>
                  <td><?= $data['barang']; ?></td>
                  <td><?= $data['jumlah']; ?></td>
                  <td><?= $data['beli']; ?></td>
                  <td><?= $data['jual']; ?></td>
                  <td><?= $data['keluar']; ?></td>
                  <td><?= $data['sisa']; ?></td>
                  <td><?= $data['jumbel']; ?></td>
                  <td><?= $data['jumal']; ?></td>
                  <td><?= $data['laba']; ?></td>
                    <td>
                        <!-- Modifikasi tombol edit dan hapus-->
                        <a class="btn btn-sm btn-warning" href="?hal=koperasi_edit1&id=<?= $data['id_barang'] ?>"><img src="img/edit.png" alt="img" width="20" ,heigh="1"></a>
                      
                        <a class="btn btn-sm btn-danger" href="?hal=koperasi_delete1&id=<?= $data['id_barang'] ?>">
                        <img src="img/tempatsampah.png" alt="img" width="20" ,heigh="1"></a>
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