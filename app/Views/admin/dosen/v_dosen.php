<div class="row">
    <div class="col-sm-12">
        <div class="box box-succes box-solid">
            <div class="box box-header box-border">
                <h3 class="box-title">Data <?= $title ?></h3>

                <div class="box-tools pull-right">
                    <a href="<?= base_url('Dosen/Add') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data Dosen</a>
                </div>
                <!-- box tools -->
            </div>
            <!-- box header -->
            <div class="box-body">

                <?php 
                if (session()->getFlashdata('success')) {
                echo '<div class="alert alert-success" role="alert">'; 
                echo session()->getFlashdata('success');
                echo '</div>';
                } 
                ?>

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="50px" class="text-center">No</th>
                            <th>NIDN</th>
                            <th>Nama Lengkap</th>
                            <th>No.Hp</th>
                            <th>Email</th>
                            <th width="150px" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <?php $no=1;
                    foreach ($dosen as $Key => $value) { ?>
                    <tbody>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value['nidn'] ?></td>
                            <td><?= $value['nama_dosen'] ?> <?= $value['nama_panjang'] ?></td>
                            <td><?= $value['hp'] ?></td>
                            <td><?= $value['email'] ?></td>
                            <td class="text-center">
                            <a href="<?= base_url('Dosen/Detail/' . $value['id_dosen']) ?>" type="button" title="Edit" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
                            <button type="button" title="Delete" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete<?= $value['id_dosen'] ?>"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>               
                </table>
            </div>
        </div>
    </div>
</div>





        <!-- Modal DELETE -->
        <?php foreach ($dosen as $key => $value){ ?>
            <div class="modal fade" id="delete<?= $value['id_dosen'] ?>">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Delete Dosen</h4>
                        </div>
                        <div class="modal-body">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title"></h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                    <div class="box-body">
                                        <p>Apakah anda yakin menghapus <b><?= $value['nama_dosen']; ?></b></p>                                     
                                    </div>
                                    <!-- /.box-body -->

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <a href="<?= base_url('Dosen/Delete/' . $value['id_dosen']); ?>" class="btn btn-danger">Delete</a>
                            </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        <?php } ?>