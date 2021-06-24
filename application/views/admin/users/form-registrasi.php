<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?= $breadcrumb ?>
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li>Dashboard</li>
      <li class="active"><?= $breadcrumb ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">


    <!-- Small boxes (Stat box) -->
    <div class="row">
      <!-- inti dari content tabel -->
      <div class="container-fluid">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="text-center"><?= $breadcrumb?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form action="<?php echo site_url('register-proses') ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">

            <div class="form-group">
                <label for="join_desa">Desa</label> <small>(Biarkan Jika Tidak Dipilih)</small>
                <select name="join_desa" class="form-control select2">
                  <option value="134">- Pilih Desa -</option>
                  <?php foreach ($join_desa as $join) { ?>
                    <option value="<?= $join->id_desa ?>">
                      <?= $join->desa ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="join_upt">Unit Kerja</label> <small>(Biarkan Jika Tidak Dipilih)</small>
                <select name="join_upt" class="form-control select2">
                  <option value="37">- Pilih Unit Kerja -</option>
                  <?php foreach ($join_upt as $data) { ?>
                    <option value="<?= $data->id_upt ?>">
                      <?= $data->nama_upt ?></option>
                  <?php } ?>
                </select>
              </div>
              
              <div class="form-group">
                <label for="join_opd">OPD</label> <small>(Biarkan Jika Tidak Dipilih)</small>
                <select name="join_opd" class="form-control select2">
                  <option value="19">- Pilih OPD -</option>
                  <?php foreach ($join_opd as $data) { ?>
                    <option value="<?= $data->id_opd ?>">
                      <?= $data->nama_opd ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="username">Username</label>
                <input type="hidden" class="form-control" name="level" value="1">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
              </div>
              
              
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>
              
              <div class="form-group">
                <label for="passconf">Konfirmasi Password</label>
                <input type="password" class="form-control" name="passconf" placeholder="Konfirmasi Password" required>
              </div>
              
              <div class="form-group">
                <label for="no_telp">Nomor Handphone</label>
                <input type="number" class="form-control" name="no_telp" placeholder="08xxxxxxxx" required>
              </div>
              
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" name="add" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- akhirrrr inti dari content tabel -->
      </div>
    </div>
  </section>
</div>