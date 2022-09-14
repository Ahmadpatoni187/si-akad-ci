    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                </div>
                <div class="box-body">
                <form role="form" method="post" action="<?php echo base_url('Mahasiswa/Update/' . $mhs['id_mhs']) ?>">
                    <div class="box-body">
                        <div class="form-group col-md-4">
                            <label for="nim">NIM</label>
                            <input name="nim" value="<?= $mhs['nim'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIM" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Program Studi</label>
                            <select class="form-control" name="id_prodi" id="" required> 
                                <option value="<?= $mhs['id_prodi'] ?>"><?= $mhs['prodi'] ?></option>
                                <?php foreach ($prodi as $key => $value) { ?>
                                    <option value="<?=$value['id_prodi'] ?>"><?=$value['prodi'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Kelas</label>
                            <select name="id_kelas" class="form-control" id="" required>
                                    <option value="<?=$mhs['id_kelas'] ?>"><?=$mhs['nama_kelas'] ?></option>
                                    <?php foreach ($kelas as $key => $value) { ?>
                                    <option value="<?=$value['id_kelas'] ?>"><?=$value['nama_kelas'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="password">Password</label>
                            <input name="password" value="<?= $mhs['password'] ?>" type="text" class="form-control" id="exampleInputEmail1" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Nama Depan</label>
                            <input name="nama_mhs" value="<?= $mhs['nama_mhs'] ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Depan" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Nama Belakang</label>
                            <input name="nama_panjang" value="<?= $mhs['nama_panjang'] ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Belakang" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="jk">Jenis Kelamin</label>
                            <select class="form-control" name="jk" id="" required>
                                <option value="<?= $mhs['jk'] ?>"><?= $mhs['jk'] ?></option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                        </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Tempat Lahir</label>
                            <input name="tempat_lahir" value="<?= $mhs['tempat_lahir'] ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Tempat Lahir" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Tanggal Lahir</label>
                            <input name="tgl_lahir" value="<?= $mhs['tgl_lahir'] ?>" type="date" class="form-control" id="exampleInputPassword1" placeholder="Masukan Tanggal Lahir" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Email</label>
                            <input name="email" value="<?= $mhs['email'] ?>" type="email" class="form-control" id="exampleInputPassword1" placeholder="Masukan Email" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">No Hp</label>
                            <input name="hp" value="<?= $mhs['hp'] ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan No Hp/WA" required>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="">Alamat</label>
                            <textarea name="alamat" cols="30" rows="3" type="textarea" class="form-control" id="exampleInputPassword1" placeholder="Masukan alamat" required><?= $mhs['alamat'] ?> </textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Nama Ayah</label>
                            <input name="nama_ayah" value="<?= $mhs['nama_ayah'] ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Ayah" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Nama Ibu</label>
                            <input name="nama_ibu" value="<?= $mhs['nama_ibu'] ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Ibu" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">No Hp Orang Tua</label>
                            <input name="hp_ortu" value="<?= $mhs['hp_ortu'] ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Hp Orang Tua" required>
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

