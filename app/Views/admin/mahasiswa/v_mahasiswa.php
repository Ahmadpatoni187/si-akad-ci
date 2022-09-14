<div class="row">
    <div class="col-sm-12">
        <div class="box box-succes box-solid">
            <div class="box box-header box-border">
                <h3 class="box-title">Data <?= $title ?></h3>

                <div class="box-tools pull-right">
                    <a href="<?= base_url('Mahasiswa/Add') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data Mahasiswa</a>
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
                            <th>NIM</th>
                            <th>Nama Lengkap</th>
                            <th>No.Hp</th>
                            <th>Program Studi</th>
                            <th width="150px" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <?php $no=1;
                    foreach ($mhs as $Key => $value) { ?>
                    <tbody>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value['nim'] ?></td>
                            <td><?= $value['nama_mhs'] ?> <?= $value['nama_panjang'] ?></td>
                            <td><?= $value['hp'] ?></td>
                            <td><?= $value['prodi'] ?></td>
                            <td class="text-center">
                            <a href="<?= base_url('Mahasiswa/Detail/' . $value['id_mhs']) ?>" type="button" title="Edit" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
                            <button type="button" title="Delete" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete<?= $value['id_mhs'] ?>"><i class="fa fa-trash"></i></button>
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
        <?php foreach ($mhs as $key => $value){ ?>
            <div class="modal fade" id="delete<?= $value['id_mhs'] ?>">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Delete Mahasiswa</h4>
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
                                <a href="<?= base_url('Mahasiswa/Delete/' . $value['id_mhs']); ?>" class="btn btn-danger">Delete</a>
                            </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        <?php } ?>