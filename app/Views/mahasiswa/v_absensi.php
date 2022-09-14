    <!-- Main content -->
<div class="row">
    <div class="col-sm-12">
        <div class="box box-primary box-solid">
            <div class="box-body">
                <div class="header">
                    <p>Tahun Ajaran <?= $ta_aktif['ta'] ?>/<?= $ta_aktif['semester'] ?></p>
                </div>
                <table id="example1" class="table table-bordered table-striped" style="font: size 13px;">
                <tr class="label-primary">
                    <th rowspan="2" class="text-center">#</th>
                    <th rowspan="2" class="text-center">Kode</th>
                    <th rowspan="2" class="text-center">Mata Kuliah</th>
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
                                foreach($data_matkul as $key => $value) {
                                    $sks = $sks + $value['sks'];
                                    ?>
                            <tr style ="color: gray;">
                                <td><?php echo $i++; ?></td>
                                <td><?= $value['kode_matkul'] ?></td>
                                <td><?= $value['matkul'] ?></td>
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
