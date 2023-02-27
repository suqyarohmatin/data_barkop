<section class="content-header">
    <h1>Tambah Barang</h1>
</section>
<section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- genel form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
<!--<h3 class="box-title">Quick Example</h3>-->
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="?hal=koperasi_insert1" method="post" role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="tanggal">tanggal</label>
                                <input type="date" class="timestamp" name="tanggal" id="tanggal" placeholder="tanggal"required>
                            </div>
                            <div class="form-group">
                                <label for="barang">barang</label>
                                <input type="varchar" class="form-control" name="barang" id="barang" placeholder="barang"required>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">jumlah</label>
                                <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="jumlah"required>

                        </div>
                        <div class="form-group">
                                <label for="beli">beli</label>
                                <input type="text" class="form-control" name="beli" id="beli" placeholder="beli"required>
                        </div>
                        <div class="form-group">
                                <label for="jual">jual</label>
                                <input type="text" class="form-control" name="jual" id="jual" placeholder="jual"required>
                        </div>
                        <div class="form-group">
                                <label for="keluar">keluar</label>
                                <input type="text" class="form-control" name="keluar" id="keluar" placeholder="keluar"required>
                        </div> 
                        <div class="form-group">
                                <label for="sisa">sisa</label>
                                <input type="text" class="form-control" name="sisa" id="sisa" placeholder="sisa"required>
                        </div> 
                        <div class="form-group">
                                <label for="jumbel">jumbel</label>
                                <input type="text" class="form-control" name="jumbel" id="jumbel" placeholder="jumbel"required>
                        </div> 
                        <div class="form-group">
                                <label for="jumal">jumal</label>
                                <input type="text" class="form-control" name="jumal" id="jumal" placeholder="jumal"required>
                        </div> 
                        <div class="form-group">
                                <label for="laba">laba</label>
                                <input type="text" class="form-control" name="laba" id="laba" placeholder="laba"required>
                        </div>
 

                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-success"><href="?hal=koperasi_tampil1">Simpan</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <a class="btn btn-danger" href="?hal=koperasi_tampil1">Batal</a>
                        </div>

                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
</selection>