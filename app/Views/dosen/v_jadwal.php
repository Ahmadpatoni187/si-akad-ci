
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
                                    <th class="text-center" width="200">Program Studi</th>
                                    <th class="text-center" width="100">Hari</th>
                                    <th class="text-center" width="100">Waktu</th>
                                    <th class="text-center" width="300">Mata Kuliah</th>
                                    <th class="text-center" width="80">SKS</th>
                                    <th class="text-center">Kelas</th>
                                    <th class="text-center">Ruangan</th>
                                    <th class="text-center">Dosen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($jadwal as $key => $value) { ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td class="text-center"><?= $value['prodi'] ?></td>
                                        <td class="text-center"><?= $value['hari'] ?></td>
                                        <td class="text-center"><?= $value['jam_awal'] ?>-<?= $value['jam_akhir'] ?></td>
                                        <td class="text-center"><?= $value['matkul'] ?></td>
                                        <td class="text-center"><?= $value['sks'] ?></td>
                                        <td class="text-center"><?= $value['nama_kelas'] ?> - <?= $value['tahun_angkatan'] ?></td>
                                        <td class="text-center"><?= $value['ruangan'] ?></td>
                                        <td class="text-center"><?= $value['nama_dosen'] ?> <?= $value['nama_panjang'] ?></td>
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


