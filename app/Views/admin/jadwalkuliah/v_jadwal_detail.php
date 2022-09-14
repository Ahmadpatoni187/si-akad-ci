<div class="row">
    <div class="col-sm-12">
        <div class="box box-primary box-solid">
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th width="150px">Program Studi</th>
                        <td width="30px"> : </td>
                        <td><?= $prodi['prodi'] ?></td>
                    </tr>
                    <tr>
                        <th width="150px">Jenjang</th>
                        <td width="30px"> : </td>
                        <td><?= $prodi['fakultas'] ?></td>
                    </tr>
                    <tr>
                        <th width="150px">Fakultas</th>
                        <td width="30px"> : </td>
                        <td><?= $prodi['jenjang'] ?></td>
                    </tr>
                    <tr>
                        <th width="150px">Tahun Akademik</th>
                        <td width="30px"> : </td>
                        <td><?= $ta_aktif['ta'] ?>/<?= $ta_aktif['semester'] ?></td>
                    </tr>
                </table>                
            </div> 
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <div class="box-title">
                    <h3 class="box-title">Data <?= $title ?></h3>
                </div>
                <div class="boc-tools pull-right">
                    <a href="<?= base_url('Jadwalkuliah') ?>" class="btn btn-box-tool btn-sm btn-warning"><i class="fa fa-list"></i> Kembali</a>
                    <button class="btn btn-box-tool" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Tambah</button>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="20px">No</th>
                            <th width="120px">Smt</th>
                            <th>Kode Matkul</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Kelas</th>
                            <th>Dosen</th>
                            <th>Hari</th>
                            <th>Waktu</th>
                            <th>Ruangan</th>
                            <th>Quota</th>
                            <th width="100px" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($jadwal as $key => $value) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $value['smt'] ?></td>
                                <td><?= $value['kode_matkul'] ?></td>
                                <td><?= $value['matkul'] ?></td>
                                <td><?= $value['sks'] ?></td>
                                <td><?= $value['nama_kelas'] ?>-<?= $value['tahun_angkatan'] ?></td>
                                <td><?= $value['nama_dosen'] ?></td>
                                <td><?= $value['hari'] ?></td>
                                <td><?= $value['jam_awal'] ?> - <?= $value['jam_akhir'] ?></td>
                                <td><?= $value['ruangan'] ?></td>
                                <td><?= $value['quota'] ?></td>
                                <td class="text-center">
                                    <button data-toggle="modal" data-target="#delete<?= $value['id_jadwal'] ?>" type="button" title="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr> 
                        <?php } ?>
                    </tbody>
                </table>                
            </div> 
        </div>
    </div>
</div>






            <!-- Modal Add -->
            <div class="modal fade" id="add">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Tambah Mata Kuliah</h4>
                        </div>
                        <div class="modal-body">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title"></h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="<?php echo base_url('Jadwalkuliah/Add/' . $prodi['id_prodi']); ?>">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <input name="id_prodi" value="<?= $prodi['id_prodi'] ?>" type="hidden" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Mata Kuliah</label>
                                            <select name="id_matkul"  class="form-control" required>
                                                <option value="">-- Pilih Mata Kuliah --</option>
                                                <?php foreach ($matkul as $key => $value) { ?>
                                                    <option value="<?= $value['id_matkul'] ?>"> <?= $value['smt'] ?> | <?= $value['kode_matkul'] ?> | <?= $value['matkul'] ?> | <?= $value['sks'] ?> SKS </option>
                                                    <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Dosen</label>
                                            <select name="id_dosen" class="form-control" id="" required>
                                                <option value="">-- Pilih Dosen --</option>
                                                <?php foreach ($dosen as $key => $value) { ?>
                                                    <option value="<?= $value['id_dosen'] ?>"> <?= $value['nama_dosen'] ?></option>
                                                    <?php } ?>
                                               
                                            </select>
                                            </div>
                                                <div class="form-group col-sm-6">
                                                    <label>Kelas</label>
                                                    <select name="id_kelas" class="form-control" id="" required>
                                                        <option value="">-- Pilih Kelas --</option>
                                                        <?php foreach ($kelas as $key => $value) { ?>
                                                            <option value="<?= $value['id_kelas'] ?>"> <?= $value['nama_kelas'] ?>-<?= $value['tahun_angkatan'] ?></option>
                                                            <?php } ?>
                                                    
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Hari</label>
                                                        <select name="hari" id="" class="form-control" required>
                                                            <option value="">-- Pilih Hari --</option>
                                                            <option value="Senin">Senin</option>
                                                            <option value="Selasa">Selasa</option>
                                                            <option value="Rabu">Rabu</option>
                                                            <option value="Kamis">Kamis</option>
                                                            <option value="Jumat">Jumat</option>
                                                            <option value="Sabtu">Sabtu</option>
                                                            <option value="Minggu">Minggu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Jam Mulai</label>
                                                        <select name="jam_awal" class="form-control"  style="color: grey;" required>
                                                            <option value="">--</option>
                                                            <option value="07:40">07:40</option>
                                                            <option value="08:20">08:20</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:40">09:40</option>
                                                            <option value="10:20">10:20</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:40">11:40</option>
                                                            <option value="12:20">12:20</option>
                                                            <option value="13:00">13:00</option>
                                                            <option value="13:40">13:40</option>
                                                            <option value="14:20">14:20</option>
                                                            <option value="15:00">15:00</option>
                                                            <option value="15:40">15:40</option>
                                                            <option value="16:20">16:20</option>
                                                            <option value="17:00">17:00</option>
                                                            <option value="17:40">17:40</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Jam Selesai</label>
                                                        <select name="jam_akhir" id="" class="form-control" required>
                                                            <option value="">--</option>
                                                            <option value="08:20">08:20</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:40">09:40</option>
                                                            <option value="10:20">10:20</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:40">11:40</option>
                                                            <option value="12:20">12:20</option>
                                                            <option value="13:00">13:00</option>
                                                            <option value="13:40">13:40</option>
                                                            <option value="14:20">14:20</option>
                                                            <option value="15:00">15:00</option>
                                                            <option value="15:40">15:40</option>
                                                            <option value="16:20">16:20</option>
                                                            <option value="17:00">17:00</option>
                                                            <option value="17:40">17:40</option>
                                                            <option value="18:00">18:00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Ruangan</label>
                                                        <select name="id_ruangan" id="" class="form-control" required>
                                                            <option value="">-- Pilih Ruangan --</option>
                                                            <?php foreach ($ruangan as $key => $value) { ?>
                                                                <option value="<?= $value['id_ruangan'] ?>"> <?= $value['ruangan'] ?></option>
                                                                <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Quota</label>
                                                        <input name="quota" class="form-control" placeholder="Quota" required>
                                                    </div>
                                                </div>
                                                    <div class="form-group">
                                                        <label>Semester</label>
                                                        <select name="semester" id="" class="form-control" required>
                                                            <option value="">-- Pilih Tingkat Semester --</option>
                                                            <option value="Ganjil">Ganjil</option>
                                                            <option value="Genap">Genap</option>
                                                        </select>
                                                    </div>
                                        </div>
                                   
                                    <!-- /.box-body -->
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->




            <!-- Modal DELETE -->
<?php foreach ($jadwal as $key => $value){ ?>
    <div class="modal fade" id="delete<?= $value['id_jadwal'] ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Delete Jadwal</h4>
                </div>
                <div class="modal-body">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"></h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                            <div class="box-body">
                                <p>Apakah anda yakin menghapus <b><?= $value['kode_matkul']; ?> - <?= $value['nama_dosen']; ?></b></p>                                     
                            </div>
                            <!-- /.box-body -->

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <a href="<?= base_url('Jadwalkuliah/Delete/' . $value['id_jadwal'] . '/' . $prodi['id_prodi']); ?>" class="btn btn-danger">Delete</a>
                    </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
