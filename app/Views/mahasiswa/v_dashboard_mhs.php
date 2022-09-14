<section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
            <?php if( $mhs['photo'] == NULL) { ?>
                <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/default.png'); ?>" alt="User profile picture">
            <?php }else{ ?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/uploads/'. $mhs['photo']); ?>" alt="User profile picture">
            <?php } ?>

            <!-- <form method="post" action=" <?php echo base_url('Mhs/UpdatePhoto'); ?> " enctype="multipart/form-data"> -->
                <h3 class="profile-username text-center"><?php echo $mhs['nama_mhs'] ?> <?php echo $mhs['nama_panjang'] ?> </h3>
                <p class="text-muted text-center"><?php echo $mhs['nim'] ?></p>
                <!-- <input type="hidden" name="id_mhs" value=" <?php echo $mhs['id_mhs']; ?> ">
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
              <h3 class="box-title">Detail Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped">
                <tr>
                    <td width="200px">NIM</td>
                    <td width="30px">:</td>
                    <td><?= $mhs['nim'] ?></td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td><?= $mhs['prodi'] ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?= $mhs['nama_mhs'] ?> <?= $mhs['nama_panjang'] ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?= $mhs['jk'] ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><?= $mhs['tempat_lahir'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><?= $mhs['tgl_lahir'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $mhs['alamat'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?= $mhs['email'] ?></td>
                </tr>
                <tr>
                    <td>No.Hp/WA</td>
                    <td>:</td>
                    <td><?= $mhs['hp'] ?></td>
                </tr>
                <tr>
                    <td>Nama Ayah</td>
                    <td>:</td>
                    <td><?= $mhs['nama_ayah'] ?></td>
                </tr>
                <tr>
                    <td>Nama Ibu</td>
                    <td>:</td>
                    <td><?= $mhs['nama_ibu'] ?></td>
                </tr>
                <tr>
                    <td>No.Hp Ortu</td>
                    <td>:</td>
                    <td><?= $mhs['hp_ortu'] ?></td>
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