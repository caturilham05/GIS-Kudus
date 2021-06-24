<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?= $dashboard ?>
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= site_url('adminstrator') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><?= $dashboard ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div id="flash-data" data-berhasil="<?= $this->session->flashdata('success') ?>"></div>
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="container-fluid">
        <div id="google__maps"></div>
      </div></br>
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h2 class="text-center">Data Pengaduan</h2>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pelapor</th>
                  <th>Tanggal Aduan</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Isi Aduan</th>
                  <th>Status</th>
                  <th>Foto</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($data as $aduan) : ?>
                  <tr>
                    <td style="width: 10px"><?= $no++ ?></td>
                    <td style="width: 40px"><?= ucfirst($aduan->nama_pelapor) ?></td>
                    <td style="width: 60px"><?= date('d/M/Y', strtotime($aduan->tgl_aduan)) ?></td>

                    <td>
                      <?php if ($aduan->id_desa != 134) { ?>
                        <?= $aduan->join_latitude_desa ?>
                      <?php } elseif ($aduan->id_upt != 37) { ?>
                        <?= $aduan->join_latitude_upt ?>
                      <?php } elseif ($aduan->id_opd != 19) { ?>
                        <?= $aduan->join_latitude_opd ?>
                      <?php } ?>
                    </td>

                    <td>
                      <?php if ($aduan->id_desa != 134) { ?>
                        <?= $aduan->join_longitude_desa ?>
                      <?php } elseif ($aduan->id_upt != 37) { ?>
                        <?= $aduan->join_longitude_upt ?>
                      <?php } elseif ($aduan->id_opd != 19) { ?>
                        <?= $aduan->join_longitude_opd ?>
                      <?php } ?>
                    </td>
                    <td style="width: 400px"><?= ucfirst($aduan->isi_aduan) ?></td>
                    <td style="width: 150px">
                      <?php if ($aduan->status == 'selesai diatasi') { ?>
                        <b style="font-size: 20px;"><?= $aduan->status ?></b>
                      <?php } else { ?>
                        <?= $aduan->status ?>
                      <?php } ?>
                    </td>
                    <td style="width: 10px">
                      <?php if ($aduan->gambar != null) : ?>
                        <img src="<?= base_url('uploads/' . $aduan->gambar) ?>" style="width: 150px; height: 150px;">
                        <a href="<?= site_url('uploads/' . $aduan->gambar) ?>" class="btn btn-xs btn-success" style="width: 150px; margin-top: 7px" target="_blank">Detail Foto</a>
                      <?php endif; ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
          <!-- AIzaSyCUzs7SLtIGGGO6949OMGTmmFefPu3hZnQ -->
        </div>
      </div>
    </div>

  </section>
</div>