<div class="row">
    <div class="col-sm-12">
        <div class="box box-succes box-solid">
            <div class="box">
                <div class="box-header">
                    <h4>Rombongan Kelas : <b><?= $kelas['nama_kelas'] ?>-<?= $kelas['tahun_angkatan'] ?></b></h4>
                    <a href="<?= base_url('Kelas') ?>" class="btn btn-warning">Kembali</a>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add">
                        <i class="fa fa-plus"></i>
                            Tambah Mahasiswa
                    </button>
                </div>
                <!-- box tools -->
            </div>
        <!-- box header -->
        <div class="box-body">
                <?php 
                $error = session()->getFlashdata('error');
                if (!empty($error)) { ?>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <?php foreach ($error as $Key => $value) { ?>
                        <li><?= esc($value) ?> </li>
                        <?php } ?>
                    </ul>
                </div>
                <?php } ?>

                <?php 
                if (session()->getFlashdata('success')) {
                echo '<div class="alert alert-success" role="alert">'; 
                echo session()->getFlashdata('success');
                echo '</div>';
                } 
                ?>

                <table class="table">
                    <tr>
                        <th width="150px">Nama Kelas</th>
                        <td width="30px">:</td>
                        <td width="200px"><?= $kelas['nama_kelas'] ?>-<?= $kelas['tahun_angkatan'] ?></td>
                        <th width="150px">Angkatan</th>
                        <td width="30px">:</td>
                        <td width="200px"><?= $kelas['tahun_angkatan'] ?></td>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <td>:</td>
                        <td><?= $kelas['prodi'] ?></td>
                        <th>Jumlah</th>
                        <td>:</td>
                        <td><?= $jml ?></td>
                    </tr>
                </table> 
                
                <table class="table table-bordered">
                    <tr class="">
                        <th width="30">No</th>
                        <th width="150px">NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Aksi</th>
                    </tr>
                    <?php $no=1; 
                    foreach ($mhs as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value['nim'] ?></td>
                        <td><?= $value['nama_mhs'] ?> <?= $value['nama_panjang'] ?></td>
                        <td>
                            <button data-toggle="modal" data-target="#delete<?= $value['id_mhs'] . $value['id_kelas']  ?>" type="button" title="Delete" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>





<!-- Modal Add -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Kelas</h4>
            </div>
            <div class="modal-body">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form
                        role="form"
                        method="post"
                        action="<?php echo base_url('Kelas/Add'); ?>">
                        <div class="box-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th Width="30">No</th>
                                        <th width="150">NIM</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Program Studi</th>
                                        <th width="30px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1;
                                    foreach ($mhs_tpk as $key => $value) { ?>
                                    <?php if ($kelas['id_prodi'] == $value['id_prodi']) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['nim'] ?></td>
                                        <td><?= $value['nama_mhs'] ?></td>
                                        <td><?= $value['prodi'] ?></td>
                                        <td>
                                            <a href="<?= base_url('Kelas/AddMhs/' . $value['id_mhs'] . '/' . $kelas['id_kelas']) ?>" class="btn btn-success btn-xs"><i class="fa fa-plus"></i></a>
                                        </td>
                                        
                                    <?php } ?>
                                    <?php } ?>
                                    </tr>
                                </tbody>
                            </table>


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
<?php foreach ($mhs as $key => $value){ ?>
    <div class="modal fade" id="delete<?= $value['id_mhs'] . $value['id_kelas'] ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Hapus Mahasiswa Dari Kelas</h4>
                </div>
                <div class="modal-body">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"></h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                            <div class="box-body">
                                <p>Apakah anda yakin menghapus <b><?= $value['nama_mhs']; ?></b></p>                                     
                            </div>
                            <!-- /.box-body -->

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <a href="<?= base_url('Kelas/RemoveMhs/' . $value['id_mhs'] . '/' . $kelas['id_kelas']) ?>" class="btn btn-danger pull-right"><i class="fa fa-trash"> Delete</i></a>
                    </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>