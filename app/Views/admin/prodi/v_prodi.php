<div class="box">
    <div class="box-header">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add">
            <i class="fa fa-plus"></i>
                Tambah Prodi
        </button>
        <!-- <a href="<?= base_url('Prodi/Add') ?>" class="btn btn-info" ><i class="fa fa-plus"></i>Tambah</a> -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <?php 
        if (session()->getFlashdata('success')) {
          echo '<div class="alert alert-success" role="alert">'; 
          echo session()->getFlashdata('success');
          echo '</div>';
        } ?>
                <?php 
        if (session()->getFlashdata('warning')) {
          echo '<div class="alert alert-success" role="alert">'; 
          echo session()->getFlashdata('warning');
          echo '</div>';
        } ?>
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
                                    <th width="50px">No</th>
                                    <th class="text-center">Fakultas</th>
                                    <th class="text-center">Kode Prodi</th>
                                    <th class="text-center">Program Studi</th>
                                    <th class="text-center">Jenjang</th>
                                    <th class="text-center">KA Prodi</th>
                                    <th width="150px" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($prodi as $key => $value) { ?>
                                <tr role="row" class="add">
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['fakultas']; ?></td>
                                    <td><?= $value['kode_prodi']; ?></td>
                                    <td><?= $value['prodi']; ?></td>
                                    <td><?= $value['jenjang']; ?></td>
                                    <td><?= $value['ka_prodi']; ?></td>
                                    <td class="text-center">
                                        <button data-toggle="modal" data-target="#edit<?= $value['id_prodi'] ?>" type="button" title="Edit" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button>
                                        <button data-toggle="modal" data-target="#delete<?= $value['id_prodi'] ?>" type="button" title="Delete" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>






    <!-- Modal Add -->
    <div class="modal fade" id="add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Program Studi</h4>
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
                            action="<?php echo base_url('Prodi/Add'); ?>">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Fakultas</label>
                                    <select name="id_fakultas" class="form-control" id="" required>
                                        <option value="">-- Pilih Fakultas --</option>
                                        <?php foreach ($fakultas as $key  => $value) { ?>
                                            <option value="<?= $value['id_fakultas'] ?>"><?= $value['fakultas'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kode Program Studi</label>
                                    <input name="kode_prodi" class="form-control col-sm-4" placeholder="Kode Program Studi" required>
                                </div>
                                <div class="form-group">
                                    <label>Program Studi</label>
                                    <input name="prodi" class="form-control col-sm-4" placeholder="Program Studi" required>
                                </div>
                                <div class="form-group">
                                    <label>Jenjang</label>
                                    <select name="jenjang" id="" class="form-control" required>
                                        <option value="">-- Pilih Jenjang --</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>KA Prodi</label>
                                    <select name="ka_prodi" class="form-control">
                                        <option value="">-- Pilih KA Prodi --</option>
                                        <?php foreach ($dosen as $key  => $value) { ?>
                                            <option value="<?= $value['nama_dosen'] ?> <?= $value['nama_panjang'] ?>"><?= $value['nama_dosen'] ?> <?= $value['nama_panjang'] ?></option>
                                        <?php } ?>
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


    <!-- Modal EDIT -->
    <?php foreach ($prodi as $key => $value){ ?>
    <div class="modal fade" id="edit<?= $value['id_prodi'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Fakultas</h4>
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
                            action="<?php echo base_url('Prodi/Edit/' . $value['id_prodi']); ?>">
                            <div class="box-body">

                                <div class="form-group">
                                    <label>Kode Program Studi</label>
                                    <input name="kode_prodi"  value="<?= $value['kode_prodi'] ?>" class="form-control col-sm-4" placeholder="Kode Program Studi">
                                </div>
                                <div class="form-group">
                                    <label>Program Studi</label>
                                    <input name="prodi" value="<?= $value['prodi'] ?>" class="form-control col-sm-4" placeholder="Program Studi">
                                </div>
                                <div class="form-group">
                                    <label>Jenjang</label>
                                    <select name="jenjang" id="" class="form-control" required>
                                        <option value="<?= $value['jenjang'] ?>"><?= $value['jenjang'] ?></option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Fakultas</label>
                                    <select name="id_fakultas" class="form-control" id="">
                                        <option value="<?= $value['id_fakultas'] ?>"><?= $value['fakultas'] ?></option>
                                        <?php foreach ($fakultas as $key  => $value) { ?>
                                            <option value="<?= $value['id_fakultas'] ?>"><?= $value['fakultas'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>KA Prodi</label>
                                    <select name="ka_prodi" class="form-control" required>
                                        <option value="">-- Pilih Fakultas --</option>
                                        <?php foreach ($dosen as $key  => $value) { ?>
                                            <option value="<?= $value['nama_dosen'] ?>"><?= $value['nama_dosen'] ?> <?= $value['nama_panjang'] ?></option>
                                        <?php } ?>
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
<?php } ?>




<!-- Modal DELETE -->
<?php foreach ($prodi as $key => $value){ ?>
    <div class="modal fade" id="delete<?= $value['id_prodi'] ?>">
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
                                <p>Apakah anda yakin menghapus <b><?= $value['prodi']; ?></b></p>                                     
                            </div>
                            <!-- /.box-body -->

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <a href="<?= base_url('Prodi/Delete/' . $value['id_prodi']); ?>" class="btn btn-danger">Delete</a>
                    </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
