<div class="content-wrapper">
  <div id="flash_data_user" data-user_add="<?= $this->session->flashdata('success') ?>"></div>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?= $breadcrumb ?>
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= site_url('administrator') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li>Dashboard</li>
      <li class="active"><?= $breadcrumb ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h2 class="text-center"><?= $breadcrumb ?></h2>
          </div>
          <!-- /.box-header -->
          <div class="container">
            <a href="<?= site_url('tambah-user') ?>" class="btn btn-info"><i class="fa fa-plus"> Tambah Pengguna</i></a>
          </div>
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Desa</th>
                  <th>Nama UPT</th>
                  <th>Nama OPD</th>
                  <th>Username</th>
                  <th>Nomor HP</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($user as $users) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td>
                        <?= $users->join_nama_desa ?>
                    </td>
                    <td>
                        <?= $users->join_nama_upt ?>
                    </td>
                    <td>
                        <?= $users->join_nama_opd ?>
                    </td>
                    <td><?= $users->username ?></td>
                    <td><?= $users->no_telp ?></td>
                    <td>
                      <a href="<?= site_url('edit-user/' . $users->user_id) ?>" class="btn btn-primary"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </div>
  </section>
</div>