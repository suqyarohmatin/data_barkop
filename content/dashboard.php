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
<section class="content">

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-building"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">BARKOP</span>
                    <span class="info-box-number"><?= $jml_barkop?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">PENITIP</span>
                    <span class="info-box-number"><?= $jml_penitip?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>