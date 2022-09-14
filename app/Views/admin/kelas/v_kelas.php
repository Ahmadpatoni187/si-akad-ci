<div class="row">
    <div class="col-sm-12">
        <div class="box box-succes box-solid">
            <div class="box box-header box-border">
                <div class="box">
                <div class="box-header">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
                        <i class="fa fa-plus"></i>
                            Tambah Kelas
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

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="50px" class="text-center">No</th>
                            <th class="text-center">Nama Kelas</th>
                            <th>Program Studi</th>
                            <th>Nama Dosen</th>
                            <th class="text-center">Tahun</th>
                            <th class="text-center">Jumlah/Kelas</th>
                            <th width="150px" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $db = \Config\Database::connect();

                        $no = 1;
                        foreach ($kelas as $key => $value) {
                            $jml = $db->table('tbl_mhs')
                            ->where('id_kelas', $value['id_kelas'])
                            ->countAllResults();  
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td class="text-center"><b><?= $value['nama_kelas'] ?>-<?= $value['tahun_angkatan'] ?></b></td>
                            <td><?= $value['prodi']?></td>
                            <td><?= $value['nama_dosen'] ?></td>
                            <td class="text-center"><?= $value['tahun_angkatan'] ?></td>
                            <td class="text-center">
                                <p class="label text-center bg-green text-sm"><?= $jml ?></p>
                                <a href="<?= base_url('Kelas/Detail/' . $value['id_kelas']); ?>" class="">Mahasiswa</a>
                            </td>
                            <td class="text-center">
                            <button type="button" title="Delete" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete<?= $value['id_kelas'] ?>"><i class="fa fa-trash"></i></button>
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
<div class="modal fade" id="modal-default">
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
                            <div class="form-group">
                                <label for="">Nama kelas</label>
                                <input
                                    name="nama_kelas"
                                    type="text"
                                    class="form-control"
                                    id="exampleInputEmail1"
                                    placeholder="Masukan Nama Kelas">
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Program Studi</label>
                                <select name="id_prodi"  class="form-control" >
                                    <option value="">--Pilih Program Studi--</option>
                                    <?php foreach ($prodi as $key => $value) { ?>
                                        <option value="<?= $value['id_prodi'] ?>"><?= $value['prodi'] ?></option>
                                         <?php } ?>
                                </select>
                                                            
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Dosen PA</label>
                                <select name="id_dosen"  class="form-control" >
                                    <option value="">--Pilih Dosen PA--</option>
                                    <?php foreach ($dosen as $key => $value) { ?>
                                        <option value="<?= $value['id_dosen'] ?>"><?= $value['nama_dosen'] ?></option>
                                         <?php } ?>

                                </select>
                                                            
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Tahun Angkatan</label>
                                <select name="tahun_angkatan"  class="form-control" >
                                    <option value="">--Pilih Tahun--</option>
                                    <?php for ($i = date('Y'); $i >= date('Y')-6; $i--) {  ?>
                                    <option value="<?= $i ?>"><?= $i ?></option> 
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



<!-- Modal DELETE -->
<?php foreach ($kelas as $key => $value){ ?>
    <div class="modal fade" id="delete<?= $value['id_kelas'] ?>">
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
                                <p>Apakah anda yakin menghapus <b><?= $value['nama_kelas']; ?></b></p>                                     
                            </div>
                            <!-- /.box-body -->

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <a href="<?= base_url('Kelas/Delete/' . $value['id_kelas']); ?>" class="btn btn-danger">Delete</a>
                    </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>