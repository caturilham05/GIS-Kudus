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
      <div class="container-fluid">
        <h3 class="text-center"><b>Pilih Titik Untuk Pengaduan</b></h3>
        <h5>(Form Pada Kolom Latitude dan Longitude Otomatis Terisi)*</h5>
        <div id="maps__pengaduan"></div>
      </div><br><br>
      <!-- inti dari content tabel -->
      <div class="container-fluid">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="text-center">Form Pengaduan</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form action="<?php echo site_url('auth-proses') ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="nama_pelapor">Nama Pelapor</label>
                <input type="text" class="form-control" name="nama_pelapor" placeholder="Nama Pelapor" required>
              </div>
              <div class="form-group">
                <label for="tgl_aduan">Tanggal Aduan</label>
                <input type="date" class="form-control" name="tgl_aduan" required>
              </div>

              <div class="form-group">
                <label for="join_kecamatan">Kecamatan</label>
                <select name="join_kecamatan" class="form-control select2" required>
                  <option value="">- Pilih Kecamatan -</option>
                  <?php foreach ($join_kecamatan as $data) { ?>
                    <option value="<?= $data->id_kecamatan ?>">
                      <?= $data->kecamatan ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="join_desa">Desa</label>
                <select name="join_desa" class="form-control select2" required>
                  <option value="">- Pilih Desa -</option>
                  <?php foreach ($join_desa as $data) { ?>
                    <option value="<?= $data->id_desa ?>">
                      <?= $data->desa ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="join_upt">Unit Kerja</label>
                <select name="join_upt" class="form-control select2" required>
                  <option value="">- Pilih Unit Kerja -</option>
                  <?php foreach ($join_upt as $data) { ?>
                    <option value="<?= $data->id_upt ?>">
                      <?= $data->nama_upt ?></option>
                  <?php } ?>
                </select>
              </div>
              
              <div class="form-group">
                <label for="join_opd">OPD</label>
                <select name="join_opd" class="form-control select2" required>
                  <option value="">- Pilih OPD -</option>
                  <?php foreach ($join_opd as $data) { ?>
                    <option value="<?= $data->id_opd ?>">
                      <?= $data->nama_opd ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <label for="lat">Latitude</label>
                    <input type="text" class="form-control" name="lat" placeholder="Latitude" readonly>
                  </div>
                  <div class="col-md-6">
                    <label for="lng">Longitude</label>
                    <input type="text" class="form-control" name="lng" placeholder="Longitude" readonly>
                  </div>
                </div>
                <span>(Latitude dan Longitude Otomatis Terisi Saat Memilih Titik Pengaduan)*</span>
              </div>

              <div class="form-group">
                <label for="isi_aduan">Isi Aduan</label>
                <textarea name="isi_aduan" cols="100" rows="5" class="form-control" placeholder="Isi Aduan" required></textarea>
              </div>

              <div class="form-group">
                <label for="image">File input</label>
                <input type="file" name="gambar" class="form-control">
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