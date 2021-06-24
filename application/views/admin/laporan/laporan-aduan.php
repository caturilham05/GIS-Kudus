<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?= $laporan ?>
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= site_url('administrator') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li> dashboard</li>
      <li class="active"><?= $laporan ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <!-- inti dari content tabel -->
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h2 class="text-center"><?= $laporan?></h2>
          </div>
          <!-- /.box-header -->
          <div class="container">
            <a href="<?= base_url('laporan-pengaduan/download-laporan') ?>" target="_blank" class="btn btn-warning"><i class="fa fa-file"></i>Download Semua</a>
          </div>
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pelapor</th>
                  <th>Tanggal Aduan</th>
                  <th>Isi Aduan</th>
                  <th>status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($join as $aduan) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= ucfirst($aduan->nama_pelapor) ?></td>
                    <td><?= date('d/F/Y', strtotime($aduan->tgl_aduan)) ?></td>
                    <td><?= ucfirst($aduan->isi_aduan) ?></td>
                    <td><b><?= $aduan->status ?></b></td>
                    <td>
                      <a href="<?= site_url('download/download-' . $aduan->id_pengaduan) ?>" target="_blank" class="btn btn-primary"><i class="fa fa-download"></i>&nbsp;&nbsp;Download PDF</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <!-- akhirrrr inti dari content tabel -->
    </div>
  </section>
</div>