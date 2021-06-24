<section class="atas">
    <center><img src="https://mudik.kuduskab.go.id/gambar/logo.png" alt="icon" width="100" height="120"></center>
    <h2 class="text-center tulisan pt-3">Peta Desa</h2>
    <center>
        <div class="garisan"></div>
    </center>
</section>


<section>
    <div class="container-fluid mt-5">
        <!-- peta pengaduan -->
        <div id="form__pengaduan">
        </div>
    </div>
</section>


<section>
    <div class="container mb-5 mt-5">
        <!-- Small boxes (Stat box) -->
        <div class="box">
            <div class="box-header">
                <h2 class="text-center">Data Desa</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kecamatan</th>
                            <th>Desa</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($desa as $data) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data->kecamatan ?></td>
                                <td><?= $data->desa ?></td>
                                <td><?= $data->latitude ?></td>
                                <td><?= $data->longitude ?></td>
                                <td>
                                    <button class="btn btn-primary btn-sm btn-flat">Lihat Titik Lokasi</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    
</section>