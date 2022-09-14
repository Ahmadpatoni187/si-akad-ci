    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <img style="width: 250px;" src=" <?php echo base_url('assets/img/uploads/'.$mhs['photo']) ?>">
            </div>
            <div class="row">
    <div class="col-sm-8">
        <div class="box box-primary box-solid">
            <div class="box-body">
                <div class="header">
                    <p>Tahun Ajaran <?= $ta_aktif['ta'] ?>/<?= $ta_aktif['semester'] ?></p>
                </div>
                <table class="table table-bordered">
                    <tr>
                        <th width="200px">Tahun Akademik</th>
                        <td width="30px"> : </td>
                        <td><?= $ta_aktif['ta'] ?>/<?= $ta_aktif['semester'] ?></td>
                    </tr>
                    <tr>
                        <th>NIM</th>
                        <td>:</td>
                        <td><?= $mhs['nim'] ?></td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>:</td>
                        <td><?= $mhs['nama_mhs'] ?> <?= $mhs['nama_panjang'] ?></td>
                    </tr>
                    <tr>
                        <th>Fakultas</th>
                        <td>:</td>
                        <td><?= $mhs['fakultas'] ?></td>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <td>:</td>
                        <td><?= $mhs['prodi'] ?></td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>:</td>
                        <td><?= $mhs['nama_kelas'] ?></td>
                    </tr>
                    <tr>
                        <!-- <th>Dosen PA</th>
                        <td>:</td> -->
                    </tr>
                </table>                
            </div> 
        </div>
    </div>
</div>
        </div>
        <br> <br>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary box-solid">
                <div class="box-header">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add">
                        <i class="fa fa-plus"></i>
                        Tambah KRS 
                    </button>
                    <!-- <a href="" class="btn btn-info btn-sm"><i class="fa fa-print"></i> Cetak</a> -->
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped" style="font: size 13px;">
                        <thead>
                            <th width="30px">#</th>
                            <th>Kode </th>
                            <th>Mata Kuliah </th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Tahun Angkatan</th>
                            <th>Kelas</th>
                            <th>Ruangan</th>
                            <th>Nama Dosen</th>
                            <th>Waktu</th>
                            <th>Aksi</th>  
                        </thead>
                        <tbody>
                            <?php $i = 1;
                                $sks = 0;
                                foreach($data_matkul as $key => $value) {
                                    $sks = $sks + $value['sks'];
                                    ?>
                            <tr style ="color: gray;">
                                <td><?php echo $i++; ?></td>
                                <td><?= $value['kode_matkul'] ?></td>
                                <td><?= $value['matkul'] ?></td>
                                <td><?= $value['sks'] ?></td>
                                <td><?= $value['smt'] ?></td>
                                <td><?= $value['tahun_angkatan'] ?></td>
                                <td><?= $value['nama_kelas'] ?> - <?= $value['kode_matkul'] ?></td>
                                <td><?= $value['ruangan'] ?></td>
                                <td><?= $value['nama_dosen'] ?></td>
                                <td><?= $value['hari'] ?>, <?= $value['jam_awal'] ?> - <?= $value['jam_akhir'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_krs'] ?>">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <h5>Jumlah SKS : <?= $sks ?></h5>
              </div>
        </div>
      </div>
  </div>
    </section>
    <!-- /.content -->



<!-- Modal KRS mahasiswa -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Mata Kuliah Ditawarkan</h4>
            </div>

            <div class="modal-body">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div>
                    <form role="form" method="post" action="">
                        <div class="box-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr style="font-size:13px;" class="label-info">
                                        <th>#</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>SKS</th>
                                        <th>SMT</th>
                                        <th>Kelas</th>
                                        <th>Ruang</th>
                                        <th>Dosen</th>
                                        <th>Waktu</th>
                                        <th>Quota</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1;
                                    $db = \Config\Database::connect();
                                    foreach ($matkul_ditawarkan as $key => $value) {
                                        $jml = $db->table('tbl_krs')
                                            ->where('id_jadwal', $value['id_jadwal'])
                                            ->countAllResults();
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['kode_matkul'] ?></td>
                                        <td class="text-center">
                                            <?= $value['matkul'] ?> (<?= $value['kode_prodi'] ?>)
                                        </td>
                                        <td><?= $value['sks'] ?></td>
                                        <td><?= $value['smt'] ?></td>
                                        <td><?= $value['nama_kelas'] ?></td>
                                        <td><?= $value['ruangan'] ?></td>
                                        <td><?= $value['nama_dosen'] ?></td>
                                        <td><?= $value['hari'] ?>, <?= $value['jam_awal'] ?> - <?= $value['jam_akhir'] ?></td>
                                        <td class="text-center">
                                            <span class="label label-success"><?= $jml ?>/<?= $value['quota'] ?></span>
                                        </td>
                                        <td class="text-center">
                                            <?php if ($jml == $value['quota']) { ?>
                                                <span class="label label-danger">Full</span>
                                            <?php } else { ?>
                                                <a href="<?= base_url('Krs/Tambah_Matkul/' . $value['id_jadwal']) ?>"><i class="fa fa-plus"></i></a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>






<!-- Modal DELETE -->
<?php foreach ($data_matkul as $key => $value){ ?>
    <div class="modal fade" id="delete<?= $value['id_krs'] ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Delete Prodi</h4>
                </div>
                <div class="modal-body">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"></h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                            <div class="box-body">
                                <p>Apakah anda yakin menghapus <b><?= $value['kode_matkul']; ?> | <?= $value['matkul']; ?></b> ?</p>                                   
                            </div>
                            <!-- /.box-body -->

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <a href="<?= base_url('Krs/Delete/' . $value['id_krs']); ?>" class="btn btn-danger">Delete</a>
                    </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
