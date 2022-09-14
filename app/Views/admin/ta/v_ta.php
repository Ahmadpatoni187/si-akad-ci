<div class="box">
    <div class="box-header">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
            <i class="fa fa-plus"></i>
                Tambah
        </button>
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
                <div class="col-sm-2">
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
                                    <th>Tahun Akademik</th>
                                    <th>Semester </th>
                                    <th>Status</th>
                                    <th width="150px" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($ta as $key => $value) { ?>
                                <tr role="row" class="odd">
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['ta']; ?></td>
                                    <td><?= $value['semester']; ?></td>
                                    <td>
                                        <?php if ($value['status'] == 1) {
                                            echo 'Aktif';
                                        } elseif ($value['status'] == 0) {
                                            echo 'Tidak Aktif';
                                        } ?>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" title="Edit" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit<?= $value['id_ta'] ?>"><i class="fa fa-pencil"></i></button>
                                        <button type="button" title="Delete" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete<?= $value['id_ta'] ?>"><i class="fa fa-trash"></i></button>
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
<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Tahun Akademik</h4>
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
                        action="<?php echo base_url('Ta/Add'); ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Tahun Akademik </label>
                                <input
                                    name="ta"
                                    type="text"
                                    class="form-control"
                                    id="exampleInputEmail1"
                                    placeholder="Ex: 2020/2021" required>
                            </div>
                            <div class="form-group">
                                <label for="">Semester </label>
                               <select name="semester" class="form-control" id="" required>
                                <option value="">-- Pilih Semester --</option>
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


<!-- Modal EDIT -->
<?php foreach ($ta as $key => $value){ ?>
<div class="modal fade" id="edit<?= $value['id_ta'] ?>">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Tahun Akademik</h4>
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
                        action="<?php echo base_url('Ta/Edit/' . $value['id_ta']); ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Tahun Akademik</label>
                                <input name="ta" value="<?= $value['ta'] ?>"  class="form-control" type="text" value="<?= $value['ta']; ?>" >
                            </div>
                            <div class="form-group">
                                <label for="">Semester </label>
                               <select name="semester" class="form-control" id="">
                                <option value="Ganjil" <?php if ($value['semester']=='Ganjil'){
                                    echo 'Selected';
                                } ?> >Ganjil</option>
                                <option value="Genap" <?php if ($value['semester']=='Genap'){
                                    echo 'Selected';
                                } ?>>Genap</option>
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                               <select name="status" class="form-control" id="" required>
                                <option value="">-- Status --</option>
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
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
<?php foreach ($ta as $key => $value){ ?>
<div class="modal fade" id="delete<?= $value['id_ta'] ?>">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Tahun Akademik</h4>
            </div>
            <div class="modal-body">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                        <div class="box-body">
                            <p>Apakah anda yakin menghapus <b><?= $value['ta']; ?></b></p>                                     
                        </div>
                        <!-- /.box-body -->

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('Ta/Delete/' . $value['id_ta']); ?>" class="btn btn-danger">Delete</a>
                </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php } ?>
