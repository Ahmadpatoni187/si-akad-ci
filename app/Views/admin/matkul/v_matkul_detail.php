<div class="row">
    <div class="col-sm-12">
        <div class="box box-primary box-solid">
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th width="150px">Program Studi</th>
                        <td width="30px"> : </td>
                        <td><?= $prodi['prodi'] ?></td>
                    </tr>
                    <tr>
                        <th width="150px">Jenjang</th>
                        <td width="30px"> : </td>
                        <td><?= $prodi['fakultas'] ?></td>
                    </tr>
                    <tr>
                        <th width="150px">Fakultas</th>
                        <td width="30px"> : </td>
                        <td><?= $prodi['jenjang'] ?></td>

                    </tr>
                </table>                
            </div> 
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <div class="box-title">
                    <h3 class="box-title">Data <?= $title ?></h3>
                </div>
                <div class="boc-tools pull-right">
                    <a href="<?= base_url('Matkul') ?>"><i class="btn btn-warning btn-sm">Kembali</i></a>
                    <button class="btn btn-box-tool" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Tambah</button>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="20px">No</th>
                            <th width="120px">Kode</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Kategori</th>
                            <th>Semester</th>
                            <th width="100px" class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; 
                        foreach ($matkul as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value['kode_matkul'] ?></td>
                            <td><?= $value['matkul'] ?></td>
                            <td><?= $value['sks'] ?></td>
                            <td><?= $value['kategori'] ?></td>
                            <td><?= $value['smt'] ?> (<?= $value['semester'] ?>)</td>
                            <td class="text-center">
                                <button type="button" title="Delete" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_matkul'] ?>"><i class="fa fa-trash"></i></button>
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
            <div class="modal fade" id="add">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Tambah Mata Kuliah</h4>
                        </div>
                        <div class="modal-body">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title"></h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="<?php echo base_url('Matkul/Add'); ?>">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <input name="id_prodi" value="<?= $prodi['id_prodi'] ?>" type="hidden" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Kode Mata Kuliah</label>
                                            <input name="kode_matkul" type="text" class="form-control" placeholder="Ex: CL-02" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Mata Kuliah</label>
                                            <input name="matkul" type="text" class="form-control" placeholder="Masukan Nama Mata Kuliah" required>
                                        </div>
                                        <div class="form-group">
                                            <label>SKS</label>
                                            <select name="sks" class="form-control" id="">
                                                <option value="">-- Pilih SKS --</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select name="kategori" class="form-control" id="">
                                                <option value="">-- Pilih Kategori --</option>
                                                <option value="Wajib">Wajib</option>
                                                <option value="Tidak Wajib">Tidak Wajib</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Semester</label>
                                            <select name="smt" id="" class="form-control" required>
                                                <option value="">-- Pilih Semester --</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                            <select name="semester" id="" class="form-control">
                                                <option value="">-- Pilih Tingkat Semester --</option>
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




        <!-- Modal DELETE -->
        <?php foreach ($matkul as $key => $value){ ?>
            <div class="modal fade" id="delete<?= $value['id_matkul'] ?>">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Delete Fakultas</h4>
                        </div>
                        <div class="modal-body">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title"></h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                    <div class="box-body">
                                        <p>Apakah anda yakin menghapus <b><?= $value['matkul']; ?></b></p>                                     
                                    </div>
                                    <!-- /.box-body -->

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <a href="<?= base_url('Matkul/Delete/' . $value['id_matkul']); ?>" class="btn btn-danger">Delete</a>
                            </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        <?php } ?>