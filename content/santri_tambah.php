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
<!--                        <h3 class="box-title">Quick Example</h3>-->
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="?hal=santri_insert" method="post" role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="tanggal">tanggal</label>
                                <input type="date" class="timestamp" name="tanggal" id="tanggal" placeholder="tanggal"required>
                            </div>
                            <div class="form-group">
                                <label for="nama">nama</label>
                                <input type="varchar" class="form-control" name="nama" id="nama" placeholder="nama"required>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">jumlah</label>
                                <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="jumlah"required>
                            <div class="form-group">
                                <label for="beli">beli</label>
                                <input type="text" class="form-control" name="beli" id="beli" placeholder="beli"required>
                            </div>
                            <div class="form-group">
                                <label for="jual">jual</label>
                                <input type="text" class="form-control" name="jual" id="jual" placeholder="jual"required>
                            </div>
                            <div class="form-group">
                                <label for="laba">laba</label>
                                <input type="text" class="form-control" name="laba" id="laba" placeholder="laba"required>
                        </div>
 

                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <a class="btn btn-danger" href="?hal=santri_tampil">Batal</a>
                        </div>

                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
</selection>