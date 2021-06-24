<section class="atas">
    <center><img src="https://mudik.kuduskab.go.id/gambar/logo.png" alt="icon" width="100" height="120"></center>
    <h2 class="text-center tulisan pt-3">Edit Pengaduan</h2>
    <center>
        <div class="garisan"></div>
    </center>
</section>

<section class="mt-5 aduan">
    <div class="container-fluid">
        <div class="d-flex lampiran">
            <!-- peta pengaduan -->
            <div class="m-5 form__pengaduan">
                <form action="<?= site_url('edit-pengaduan/' . $id_pengaduan) ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_pelapor">Nama Pelapor</label>
                        <input type="hidden" class="form-control " name="user_id" value="<?= $this->session->userdata('user_id')?>">
                        <input type="hidden" class="form-control " name="id_pengaduan" value="<?php echo $id_pengaduan ?>">
                        <input type="text" class="form-control " name="nama_pelapor" placeholder="Nama Pelapor" value="<?php echo $nama_pelapor ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tgl_aduan">Tanggal Aduan</label>
                        <input type="date" class="form-control" name="tgl_aduan" value="<?php echo $tgl_aduan ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="isi_aduan">Alasan Membatalkan Pengaduan</label>
                        <textarea name="isi_aduan" cols="100" rows="5" class="form-control" placeholder="Isi Aduan" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                    </div>
                    <img src="<?php echo base_url('uploads/' . $gambar) ?>" alt="img" height="400" width="700">

                    <div class="box-footer mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>