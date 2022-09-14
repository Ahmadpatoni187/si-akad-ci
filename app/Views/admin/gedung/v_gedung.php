<div class="box">
    <div class="box-header">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
            <i class="fa fa-plus"></i>
                Tambah Gedung
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
                                    <th>Gedung</th>
                                    <th width="100px" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($gedung as $key => $value) { ?>
                                <tr role="row" class="odd">
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['gedung']; ?></td>
                                    <td class="text-center">
                                        <button type="button" title="Edit" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit<?= $value['id_gedung'] ?>"><i class="fa fa-pencil"></i></button>
                                        <button type="button" title="Delete" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete<?= $value['id_gedung'] ?>"><i class="fa fa-trash"></i></button>
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
                <h4 class="modal-title">Tambah Gedung</h4>
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
                        action="<?php echo base_url('Gedung/Add'); ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Nama Gedung</label>
                                <input
                                    name="gedung"
                                    type="text"
                                    class="form-control"
                                    id="exampleInputEmail1"
                                    placeholder="Masukan Nama Gedung">
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
<?php foreach ($gedung as $key => $value){ ?>
<div class="modal fade" id="edit<?= $value['id_gedung'] ?>">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Gedung</h4>
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
                        action="<?php echo base_url('Gedung/Edit/' . $value['id_gedung']); ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Nama Gedung</label>
                                <input name="gedung" value="<?= $value['gedung'] ?>"  class="form-control" type="text" value="<?= $value['gedung']; ?>" >
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
<?php foreach ($gedung as $key => $value){ ?>
<div class="modal fade" id="delete<?= $value['id_gedung'] ?>">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Gedung</h4>
            </div>
            <div class="modal-body">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                        <div class="box-body">
                            <p>Apakah anda yakin menghapus <b><?= $value['gedung']; ?></b></p>                                     
                        </div>
                        <!-- /.box-body -->

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('Gedung/Delete/' . $value['id_gedung']); ?>" class="btn btn-danger">Delete</a>
                </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php } ?>
