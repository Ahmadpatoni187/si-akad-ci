    <!-- Main content -->
    <section class="content">

    <?php
      $db = \Config\Database::connect();
          $gedung = $db->table('tbl_gedung')
          ->countAllResults();    
    ?>
    <?php
      $db = \Config\Database::connect();
          $ruangan = $db->table('tbl_ruangan')
          ->countAllResults();    
    ?>
    <?php
      $db = \Config\Database::connect();
          $fakultas = $db->table('tbl_fakultas')
          ->countAllResults();    
    ?>
    <?php
      $db = \Config\Database::connect();
          $prodi = $db->table('tbl_prodi')
          ->countAllResults();    
    ?>
    <?php
      $db = \Config\Database::connect();
          $matkul = $db->table('tbl_matkul')
          ->countAllResults();    
    ?>
    <?php
      $db = \Config\Database::connect();
          $mhs = $db->table('tbl_mhs')
          ->countAllResults();    
    ?>
    <?php
      $db = \Config\Database::connect();
          $dosen = $db->table('tbl_dosen')
          ->countAllResults();    
    ?>
    <?php
      $db = \Config\Database::connect();
          $kelas = $db->table('tbl_kelas')
          ->countAllResults();    
    ?>
      
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $gedung ?></h3>

              <p>Gedung</p>
            </div>
            <div class="icon">
              <i class="ion ion-university"></i>
            </div>
            <a href="<?php echo base_url('Gedung'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $ruangan ?></h3>

              <p>Ruangan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url('Ruangan'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $fakultas ?></h3>

              <p>Fakultas</p>
            </div>
            <div class="icon">
              <i class="ion ion-filing"></i>
            </div>
            <a href="<?php echo base_url('Fakultas'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $prodi ?></h3>

              <p>Program Studi</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url('Prodi'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?= $matkul ?></h3>

              <p>Mata Kuliah</p>
            </div>
            <div class="icon">
              <i class="ion ion-folder"></i>
            </div>
            <a href="<?php echo base_url('Matkul'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?= $kelas ?></h3>

              <p>Kelas</p>
            </div>
            <div class="icon">
              <i class="ion ion-chatboxes"></i>
            </div>
            <a href="<?php echo base_url('Dosen'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-navy">
            <div class="inner">
              <h3><?= $mhs ?></h3>

              <p>Data Mahasiswa</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="<?php echo base_url('Mahasiswa'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?= $dosen ?></h3>

              <p>Data Dosen</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?php echo base_url('Dosen'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        


      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->