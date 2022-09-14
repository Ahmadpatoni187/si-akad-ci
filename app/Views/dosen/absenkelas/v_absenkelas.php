<section>
    <div class="col-sm-6">
        <div class="box box-primary box-solid">
            <div class="box-body">
                <div class="header">
                    <h3>Absensi Kelas : <?= $jadwal['nama_kelas'] ?></h3>
                </div>
                <table class="table table-bordered">
                    <tr>
                        <th width="200px">Program Studi</th>
                        <td width="30px"> : </td>
                        <td><?= $jadwal['prodi'] ?></td>
                    </tr>
                    <tr>
                        <th>Fakultas</th>
                        <td>:</td>
                        <td><?= $jadwal['fakultas'] ?></td>
                    </tr>
                    <tr>
                        <th>Kode</th>
                        <td>:</td>
                        <td><?= $jadwal['kode_matkul'] ?></td>
                    </tr>
                    <tr>
                        <th>Mata Kuliah</th>
                        <td>:</td>
                        <td><?= $jadwal['matkul'] ?></td>
                    </tr>
                    <tr>
                        <th>Jadwal</th>
                        <td>:</td>
                        <td><?= $jadwal['hari'] ?>, <?= $jadwal['jam_awal'] ?>-<?= $jadwal['jam_akhir'] ?></td>
                    </tr>
                    <tr>
                        <th>Dosen</th>
                        <td>:</td>
                        <td><?= $jadwal['nama_dosen'] ?></td>
                    </tr>
                    <tr>
                        <!-- <th>Dosen PA</th>
                        <td>:</td> -->
                    </tr>
                </table>                
            </div> 
        </div>
    </div>


    <!-- Main content -->
    <div class="row">
    <div class="col-sm-12">
        <button class="btn bts-xs btn-primary" data-toggle="modal" data-target="#add<?= $jadwal['id_jadwal'] ?>"><i class="fa fa-plus"></i> Isi Absen</button>
        <div class="box box-primary box-solid">
            <div class="box-body">
                <div class="header">
                </div>
                <table id="example1" class="table table-bordered table-striped" style="font: size 13px;">
                <tr class="label-primary">
                    <th rowspan="2" class="text-center">#</th>
                    <th rowspan="2" class="text-center">NIM</th>
                    <th rowspan="2" class="text-center">Nama Mahasiswa</th>
                    <th colspan="18" class="text-center">Pertemuan</th>
                    <th   rowspan="2" class="text-center">%</th>
                </tr>
                <tr class="label-primary">
                    <th  class="text-center">1</th>
                    <th  class="text-center">2</th>
                    <th  class="text-center">3</th>
                    <th  class="text-center">4</th>
                    <th  class="text-center">5</th>
                    <th  class="text-center">6</th>
                    <th  class="text-center">7</th>
                    <th  class="text-center">8</th>
                    <th  class="text-center">9</th>  
                    <th  class="text-center">10</th>
                    <th  class="text-center">11</th>
                    <th  class="text-center">12</th>
                    <th  class="text-center">13</th>
                    <th  class="text-center">14</th>
                    <th  class="text-center">15</th>
                    <th  class="text-center">16</th>
                    <th  class="text-center">17</th>
                    <th  class="text-center">18</th>
                    
                    
                </tr>
                                        
                        <tbody>
                            <?php $i = 1;
                                $sks = 0;
                                foreach($mhs as $key => $value) {
                                    ?>
                            <tr style ="color: gray;">
                                <td><?php echo $i++; ?></td>
                                <td><?= $value['nim'] ?></td>
                                <td><?= $value['nama_mhs'] ?> <?= $value['nama_panjang'] ?></td>
                                    <td><?php if ($value['p1'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p1'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p1'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    <td><?php if ($value['p2'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p2'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p2'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    <td><?php if ($value['p3'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p3'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p3'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    <td><?php if ($value['p4'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p4'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p4'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    <td><?php if ($value['p5'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p5'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p5'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    <td><?php if ($value['p6'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p6'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p6'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    <td><?php if ($value['p7'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p7'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p7'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    <td><?php if ($value['p8'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p8'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p8'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    <td><?php if ($value['p9'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p9'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p9'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    <td><?php if ($value['p10'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p10'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p10'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    <td><?php if ($value['p11'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p11'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p11'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    <td><?php if ($value['p12'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p12'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p12'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    <td><?php if ($value['p13'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p13'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p13'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    <td><?php if ($value['p14'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p14'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p14'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    <td><?php if ($value['p15'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p15'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p15'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    <td><?php if ($value['p16'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p16'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p16'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    <td><?php if ($value['p17'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p17'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p17'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    <td><?php if ($value['p18'] == 0) {
                                        echo '<i class="fa fa-times text-danger"></i>';
                                    } elseif  ($value['p18'] == 1) {
                                        echo '<i class="fa fa-info text-warning"></i>';
                                    } elseif  ($value['p18'] == 2) {
                                        echo '<i class="fa fa-check text-succes"></i>';
                                    }  ?></td>
                                    
                                    <td>
                                        <?php 
                                        $absensi = (
                                        $value['p1'] + 
                                        $value['p2'] + 
                                        $value['p3'] + 
                                        $value['p4'] + 
                                        $value['p5'] + 
                                        $value['p6'] + 
                                        $value['p7'] + 
                                        $value['p8'] +
                                        $value['p9'] +
                                        $value['p9'] +
                                        $value['p10'] +
                                        $value['p11'] +
                                        $value['p12'] +
                                        $value['p13'] +
                                        $value['p14'] +
                                        $value['p15'] +
                                        $value['p16'] +
                                        $value['p17'] +
                                        $value['p18']) / 38 * 100;
                                        echo number_format($absensi) . ' % ';
                                        ?>
                                    </td>
                                
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>               
                </div> 
            </div>
        </div>
    </div>
</div>
</section>





<!-- Modal KRS mahasiswa -->
<div class="modal fade" id="add<?= $jadwal['id_jadwal'] ?>" width="5000">
    <div class="modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Mata Kuliah Ditawarkan</h4>
            </div>

            <div class="modal-body">
                <div class="box box-primary">
                    <form role="form" method="post" action="<?= base_url('Dsn/IsiAbsen/' . $jadwal['id_jadwal']) ?>">
                        <div class="box-body">
                            <table class="table table-bordered table-striped text-sm">
                                <thead>
                                    <tr class="label-primary">
                                        <th rowspan="2" class="text-center">#</th>
                                        <th rowspan="2" class="text-center">NIM</th>
                                        <th rowspan="2" class="text-center">Nama Mahasiswa</th>
                                        <th colspan="18" class="text-center">Pertemuan</th>
                                    </tr>
                                    <tr class="label-primary">
                                        <th  class="text-center">1</th>
                                        <th  class="text-center">2</th>
                                        <th  class="text-center">3</th>
                                        <th  class="text-center">4</th>
                                        <th  class="text-center">5</th>
                                        <th  class="text-center">6</th>
                                        <th  class="text-center">7</th>
                                        <th  class="text-center">8</th>
                                        <th  class="text-center">9</th>  
                                        <th  class="text-center">10</th>
                                        <th  class="text-center">11</th>
                                        <th  class="text-center">12</th>
                                        <th  class="text-center">13</th>
                                        <th  class="text-center">14</th>
                                        <th  class="text-center">15</th>
                                        <th  class="text-center">16</th>
                                        <th  class="text-center">17</th>
                                        <th  class="text-center">18</th>
                                    </tr>  
                                </thead>        
                                <tbody>
                                    <?php $i = 1;
                                        $sks = 0;
                                        foreach($mhs as $key => $value) {
                                            echo form_hidden($value['id_krs'] . 'id_krs', $value['id_krs']);
                                            ?>
                                    <tr style ="color: gray;">
                                        <td><?php echo $i++; ?></td>
                                        <td><?= $value['nim'] ?></td>
                                        <td><?= $value['nama_mhs'] ?></td>
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p1">
                                                <option value="0" <?php if ($value['p1'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p1'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p1'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>        
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p2">
                                                <option value="0" <?php if ($value['p2'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p2'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p2'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>  
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p3">
                                                <option value="0" <?php if ($value['p3'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p3'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p3'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>  
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p4">
                                                <option value="0" <?php if ($value['p4'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p4'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p4'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>  
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p5">
                                                <option value="0" <?php if ($value['p5'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p5'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p5'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>  
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p6">
                                                <option value="0" <?php if ($value['p6'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p6'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p6'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>  
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p7">
                                                <option value="0" <?php if ($value['p7'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p7'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p7'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>  
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p8">
                                                <option value="0" <?php if ($value['p8'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p8'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p8'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>                                  
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p9">
                                                <option value="0" <?php if ($value['p9'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p9'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p9'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>  
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p10">
                                                <option value="0" <?php if ($value['p10'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p10'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p10'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>  
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p11">
                                                <option value="0" <?php if ($value['p11'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p11'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p11'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>  
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p12">
                                                <option value="0" <?php if ($value['p12'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p12'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p12'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>  
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p13">
                                                <option value="0" <?php if ($value['p13'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p13'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p13'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>  
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p14">
                                                <option value="0" <?php if ($value['p14'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p14'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p14'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>  
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p15">
                                                <option value="0" <?php if ($value['p15'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p15'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p15'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>  
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p16">
                                                <option value="0" <?php if ($value['p16'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p16'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p16'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>  
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p17">
                                                <option value="0" <?php if ($value['p17'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p17'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p17'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>  
                                        <td>
                                            <select name="<?= $value['id_krs'] ?>p18">
                                                <option value="0" <?php if ($value['p18'] == 0) {
                                                                        echo 'selected';
                                                                    } ?> >A</option>
                                                <option value="1" <?php if ($value['p18'] == 1) {
                                                                        echo 'selected';
                                                                    } ?> >I</option>
                                                <option value="2" <?php if ($value['p18'] == 2) {
                                                                        echo 'selected';
                                                                    } ?> >H</option>
                                            </select>
                                        </td>  
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                            </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
