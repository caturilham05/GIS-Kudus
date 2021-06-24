<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $laporan ?>
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Dashboard</li>
            <li class="active"><?= $laporan ?></li>
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
                        <h3 class="text-center"><?= $laporan ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="<?php echo site_url('auth-proses') ?>" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nama_pelapor">Nama Pelapor</label>
                                <input type="hidden" class="form-control" name="id_pengaduan" value="<?= $row->id_pengaduan ?>">
                                <input type="text" class="form-control" name="nama_pelapor" placeholder="Nama Pelapor" value="<?= $row->nama_pelapor?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="tgl_aduan">Tanggal Aduan</label>
                                <input type="date" class="form-control" name="tgl_aduan" value="<?= $row->tgl_aduan ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="isi_aduan">Isi Aduan</label>
                                <textarea name="isi_aduan" cols="100" rows="5" class="form-control" value="<?= $row->isi_aduan ?>" placeholder="<?= $row->isi_aduan ?>" readonly></textarea>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-control" required />
                                <?php $status = $this->input->post('status') ? $this->input->post('status') : $row->status ?>
                                <option value="belum diatasi">- Belum Diatasi -</option>
                                <option value="selesai diatasi" <?= $status == 'selesai diatasi' ? 'selected' : null ?>>- Selesai Diatasi -</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="gambar">Foto</label>
                                <?php if ($row->gambar != null) : ?>
                                    <div style="margin-bottom: 5px">
                                        <img src="<?php echo base_url('uploads/' . $row->gambar) ?>" style="width:50%">
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- akhirrrr inti dari content tabel -->
            </div>
        </div>
    </section>
</div>