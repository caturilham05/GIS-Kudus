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
                        <a href="<?= site_url('add-teknisi') ?>" class="btn btn-info"><i class="fa fa-plus"> Tambah Teknisi</i></a>
                    </div>
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Teknisi </th>
                                    <th>Username</th>
                                    <th>Nomor Telepon</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($teknisi as $value) {
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo ucfirst($value['name']) ?></td>
                                    <td><?php echo $value['username'] ?></td>
                                    <td><?php echo $value['no_telp'] ?></td>
                                    <td><?php echo ($value['status'] == 0) ? 'Tidak Aktif' : 'Aktif'  ?></td>
                                    <td><?php echo date('d M Y H:i:s', strtotime($value['created'])) ?></td>
                                    <td>
                                        <a href="<?= site_url('edit-teknisi/' . $value['id_teknisi']) ?>" class="btn btn-primary"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
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