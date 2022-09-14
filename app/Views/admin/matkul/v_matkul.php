<div class="box">
    <div class="box-header">
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
                                    <th>No</th>
                                    <th>Fakultas</th>
                                    <th>Kode Prodi</th>
                                    <th>Program Studi</th>
                                    <th class="text-center">Jenjang</th>
                                    <th class="text-center">Mata Kuliah</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $db = \Config\Database::connect();
                                
                                $no = 1;
                                foreach ($prodi as $key => $value) {
                                    $jml = $db->table('tbl_matkul')
                                    ->where('id_prodi', $value['id_prodi'])
                                    ->countAllResults();    
                                ?>
                                
                                <tr role="row" class="add">
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['fakultas']; ?></td>
                                    <td><?= $value['kode_prodi']; ?></td>
                                    <td><?= $value['prodi']; ?></td>
                                    <td class="text-center"><?= $value['jenjang']; ?></td>
                                    <td class="text-center">
                                        <p class="label text-center bg-green text-sm"><?= $jml ?></p>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= base_url('Matkul/Detail/' . $value['id_prodi']) ?>" type="button" title="Edit" class="btn btn-warning btn-sm"><i class="fa fa-th-list"></i> Mata Kuliah</a>
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


