<section>



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?= $breadcrumb ?>
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= site_url('administrator') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li> dashboard</li>
                <li class="active"><?= $breadcrumb ?></li>
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
                            <h2 class="text-center"><?= $breadcrumb ?></h2>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Kecamatan</th>
                                        <th>Kecamatan</th>
                                        <th>Desa</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($desa as $data) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data->idk ?></td>
                                            <td><?= $data->kecamatan ?></td>
                                            <td><?= $data->desa ?></td>
                                            <td><?= $data->latitude ?></td>
                                            <td><?= $data->longitude ?></td>
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
</section>