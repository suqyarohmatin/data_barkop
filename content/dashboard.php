<?php
if (!defined( 'INDEX')) die("");
$jml_barkop = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM data_barkop"));
?>
<?php
if (!defined( 'INDEX')) die("");
$jml_penitip = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM data_penitip"));
?>




<section class="content-header">
<h1>Dashboard</h1>
</section>
<!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
              
                    <span class="info-box-text" style="font-size: 30px">Barkop</span>
                    <span class="info-box-number" style="font-size: 40px"><?= $jml_barkop?></span>
                </h3>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
          <div class="inner">
              <h3>
                    <span class="info-box-text" style="font-size: 30px">Penitip</span>
                    <span class="info-box-number" style="font-size: 40px"><?= $jml_penitip?></span>
                </h3>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>



     

    </section>