<?php

//mengambil data nasabah dari database
$query = mysqli_query($koneksi,
    "SELECT * FROM data_barkop WHERE id_barkop='$_GET[id]'");
$data = mysqli_fetch_array($query);
?>

<section class="content-header">
    <h1>laba</h1>
</section>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- gene                    l form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <!--                        <h3 class="box-title">Quick Example</h3>-->
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="?hal=koperasi_insert_laba.php" method="post" role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="id_barkop">id_barkop</label>
                            <input type="hidden" name="id_barkop" value="<?= $data['id_barkop'] ?>">
                            <input type="text" class="form-control" name="id_barkop" id="id_barkop" value="<?= $data['id_barkop'] ?>" required readonly>

                        </div>
                        <!--                         <div class="form-group">
                                                    <label for="kode_tr">Jenis Transaksi</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="kode_tr" id="kode_tr" value="1" required>Setor
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="kode_tr" id="kode_tr" value="2">Tarik
                                                        </label>
                                                    </div> -->
                        <div class="form-group">
                            <label for="laba">laba</label>
                            <input type="number" class="form-control" name="laba" id="laba" placeholder="laba" required>
                        </div>
                        <<div class="box-footer">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <a class="btn btn-danger" href="?hal=koperasi_tampil">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->
    </div>
</section>