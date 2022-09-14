
<div class="box">
    <div class="box-header">
        <h4>Jadwal Mengajar </h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body"> 
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
                <div class="col-sm-6">
                </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table
                            id="example1"
                            class="table table-bordered table-striped dataTable"
                            role="grid"
                            aria-describedby="example1_info">   
                            <thead>
                                <tr role="row">
                                    <th class="text-center" width="30">No</th>
                                    <th class="text-center" width="150">Kode</th>
                                    <th class="text-center" width="300">Mata Kuliah</th>
                                    <th class="text-center" width="80">SKS</th>
                                    <th class="text-center">Kelas</th>
                                    <th class="text-center" width="250">Absen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; 
                                 foreach ($absen as $key => $value) { ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td class="text-center"><?= $value['kode_matkul'] ?></td>
                                        <td class="text-center"><?= $value['matkul'] ?></td>
                                        <td class="text-center"><?= $value['sks'] ?></td>
                                        <td class="text-center"><?= $value['nama_kelas'] ?> - <?= $value['tahun_angkatan'] ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('Dsn/AbsenKelas/' . $value['id_jadwal']) ?>" class="btn btn-success btn-sm"><i class="fa fa-calendar"></i> Absensi</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>


