    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                </div>
                <div class="box-body">
                <form role="form" method="post" action="<?php echo base_url('Dosen/Insert') ?>">
                    <div class="box-body">
                        <div class="form-group col-md-4">
                            <label for="nim">NIDN</label>
                            <input name="nidn" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIDN" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="password">Password</label>
                            <input name="password" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Password" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Nama Depan</label>
                            <input name="nama_dosen" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Depan" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Nama Belakang</label>
                            <input name="nama_panjang" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Belakang" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="jk">Jenis Kelamin</label>
                            <select class="form-control" name="jk" id="" required>
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Tempat Lahir</label>
                            <input name="tempat_lahir" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Tempat Lahir" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Tanggal Lahir</label>
                            <input name="tgl_lahir" type="date" class="form-control" id="exampleInputPassword1" placeholder="Masukan Tanggal Lahir" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Masukan Email" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">No Hp</label>
                            <input name="hp" type="number" class="form-control" id="exampleInputPassword1" placeholder="Masukan No Hp/WA" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Pendidikan</label>
                            <select name="pendidikan" id="" class="form-control">
                                <option value="">-- Pendidikan Terakhir --</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="">Alamat</label>
                            <textarea name="alamat" cols="30" rows="2" type="textarea" class="form-control" id="exampleInputPassword1" placeholder="Masukan alamat" required></textarea>
                        </div>
                    </div>
              <!-- /.box-body -->

            </div>
            </div>
            <div class="modal-footer">
                <a href="<?php echo base_url('Mahasiswa') ?>" class="btn btn-sm btn-warning">
                    <i class="fa fa-arrow-left"></i>
                    Kembali
                </a>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button>
            </div>
            </form>

                </div>
            </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->



    <script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#example1').DataTable()
        })
    </script>

