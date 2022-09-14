<section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
            <?php if( $dosen['photo'] == NULL) { ?>
                <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/default.png'); ?>" alt="User profile picture">
            <?php }else{ ?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/uploads/'. $dosen['photo']); ?>" alt="User profile picture">
            <?php } ?>

            <!-- <form method="post" action=" <?php echo base_url('Dsn/UpdatePhoto'); ?> " enctype="multipart/form-data"> -->
                <h3 class="profile-username text-center"><?php echo $dosen['nama_dosen'] ?> <?php echo $dosen['nama_panjang'] ?> </h3>
                <p class="text-muted text-center"><?php echo $dosen['nidn'] ?></p>
                <!-- <input type="hidden" name="id_dosen" value=" <?php echo $dosen['id_dosen']; ?> ">
                <input type="file" class="form-control" name="photo" required="">
                <button type="submit" class="btn btn-primary btn-block">Upload</button> -->
            </form>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Dosen</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped">
                <tr>
                    <td width="200px">NIDN</td>
                    <td width="30px">:</td>
                    <td><?= $dosen['nidn'] ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?= $dosen['nama_dosen'] ?> <?= $dosen['nama_panjang'] ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?= $dosen['jk'] ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><?= $dosen['tempat_lahir'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><?= $dosen['tgl_lahir'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $dosen['alamat'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?= $dosen['email'] ?></td>
                </tr>
                <tr>
                    <td>No.Hp/WA</td>
                    <td>:</td>
                    <td><?= $dosen['hp'] ?></td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td><?= $dosen['pendidikan'] ?></td>
                </tr>

              </table>
              <hr>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>