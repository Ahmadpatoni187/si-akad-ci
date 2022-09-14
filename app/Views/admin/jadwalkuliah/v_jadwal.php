
<div class="box">
    <div class="box-header">
        <h4>Jadwal Kuliah Tahun Akademik : <?= $ta_aktif['ta'] ?>/<?= $ta_aktif['semester'] ?></h4>
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
                                    <th class="text-center" width="30">No</th>
                                    <th class="text-center">Fakultas</th>
                                    <th class="text-center">Program Studi</th>
                                    <th class="text-center">Jenjang</th>
                                    <th class="text-center">Jadwal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($prodi as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['fakultas'] ?></td>
                                        <td><?= $value['prodi'] ?></td>
                                        <td><?= $value['jenjang'] ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('Jadwalkuliah/Detail/' . $value['id_prodi']) ?>" class="btn btn-success btn-sm"><i class="fa fa-calendar"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>


