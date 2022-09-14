  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/img/default.png') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= session()->get('nama_user') ?></p>
          <p>
            <?php if (session()->get('level') == 1) {
              echo 'Admin';
            } elseif (session()->get('level') == 2) {
              echo 'Mahasiswa';
            } elseif (session()->get('level') == 3) {
              echo 'Dosen';
            } ?>
            <small><?php date('d M Y') ?></small>
          </p>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <!-- untuk sesi admin -->
      <?php if (session()->get('level') == 1) { ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class=""><a href="<?php echo base_url('Dashboard'); ?>"><i class="fa fa-dashboard text-purple"></i> <span>Dashboard</span></a></li>

        <!-- Data Master -->
        <li class="header">DATA MASTER</li>
        <li><a href="<?php echo base_url('Gedung'); ?>"><i class="fa fa-building text-blue"></i><span>Gedung</span></a></li>
        <li><a href="<?php echo base_url('Ruangan'); ?>"><i class="fa fa-inbox text-orange"></i><span>Ruangan</span></a></li>
        <li><a href="<?php echo base_url('Fakultas'); ?>"><i class="fa fa-archive text-yellow"></i><span>Fakultas</span></a></li>
        <li><a href="<?php echo base_url('Prodi'); ?>"><i class="fa fa-files-o text-purple"></i><span>Program Studi</span></a></li>
        <li><a href="<?php echo base_url('Ta'); ?>"><i class="fa fa-calendar-check-o text-yellow"></i><span>Tahun Akademik</span></a></li>
        <li><a href="<?php echo base_url('Matkul'); ?>"><i class="fa fa-book text-green"></i><span>Mata Kuliah</span></a></li>
        <li><a href="<?php echo base_url('Mahasiswa'); ?>"><i class="fa fa-users text-blue"></i> Data Mahasiswa</a></li>
        <li><a href="<?php echo base_url('Dosen'); ?>"><i class="fa fa-university text-yellow"></i> Data Dosen</a></li>

        <!-- Data Akademik -->
        <li class="header">DATA AKADEMIK</li>
        <li><a href="<?php echo base_url('Kelas'); ?>"><i class="fa fa-cubes text-blue"></i><span>Kelas</span></a></li>
        <li><a href="<?php echo base_url('Jadwalkuliah'); ?>"><i class="fa fa-calendar text-yellow"></i> <span>Jadwal Kuliah</span></a></li>

        <li class="header">SESSION</li>
        <li><a href="<?php echo base_url('Auth/logout'); ?>"><i class="fa fa-power-off text-red"></i> <span>Logout</span></a></li>
      </ul>
      <?php } ?>

      
      <!-- untuk sesi mahasiswa -->
      <?php if (session()->get('level') == 2) { ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class=""><a href="<?php echo base_url('Mhs'); ?>"><i class="fa fa-user text-blue"></i> <span>Profile</span></a></li>
       
        <li><a href="<?php echo base_url('Krs'); ?>"><i class="fa fa-book text-yellow"></i> <span>KRS</span></a></li>
        <!-- <li><a href="<?php echo base_url('Khs'); ?>"><i class="fa fa-book"></i> <span>KHS</span></a></li> -->
        <li><a href="<?php echo base_url('Mhs/Absensi'); ?>"><i class="fa fa-calendar text-blue"></i> <span>Absensi</span></a></li>
 
        <li class="header">Keluar</li>
        <li><a href="<?php echo base_url('Auth/logout'); ?>"><i class="fa fa-power-off text-red"></i> <span>Logout</span></a></li>
      </ul>
      <?php } ?>

        <!-- untuk sesi dosen -->
      <?php if (session()->get('level') == 3) { ?>
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class=""><a href="<?php echo base_url('Dsn'); ?>"><i class="fa fa-user text-blue"></i> <span>Profile</span></a></li>
        
          <li><a href="<?php echo base_url('Dsn/JadwalMengajar'); ?>"><i class="fa fa-calendar text-green"></i> <span>Jadwal Mengajar</span></a></li>
          <li><a href="<?php echo base_url('Dsn/Absen'); ?>"><i class="fa fa-user-plus text-yellow"></i> <span>Absensi</span></a></li>
  
          <li class="header">Keluar</li>
          <li><a href="<?php echo base_url('Auth/logout'); ?>"><i class="fa fa-power-off text-red"></i> <span>Logout</span></a></li>
        </ul>
      <?php } ?>

    </section>
    <!-- /.sidebar -->
  </aside>

  

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo $title; ?></a></li>
        <li class="active"><?php echo $isi; ?></li>
      </ol>
    </section>

        <!-- Main content -->
        <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">