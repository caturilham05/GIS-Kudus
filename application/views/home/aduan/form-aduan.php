<section class="atas">
    <center><img src="https://mudik.kuduskab.go.id/gambar/logo.png" alt="icon" width="100" height="120"></center>
    <h2 class="text-center tulisan pt-3">Form Pengaduan</h2>
    <center>
        <div class="garisan"></div>
    </center>
</section>

<section class="mt-5 aduan">
    <div class="container-fluid">
        <div class="d-flex lampiran">
            <!-- peta pengaduan -->
            <div class="m-5 form__pengaduan" >
                <form action="<?= site_url('auth-proses') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_pelapor">Nama Pelapor</label>
                        <input type="hidden" class="form-control " name="user_id" value="<?= $this->session->userdata('user_id')?>">
                        <input type="hidden" class="form-control " name="id_desa" value="<?= $this->session->userdata('id_desa')?>">
                        <input type="hidden" class="form-control " name="id_upt" value="<?= $this->session->userdata('id_upt')?>">
                        <input type="hidden" class="form-control " name="id_opd" value="<?= $this->session->userdata('id_opd')?>">
                        <input type="text" class="form-control " name="nama_pelapor" placeholder="Nama Pelapor" value="<?php echo $this->session->userdata('username') ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tgl_aduan">Tanggal Aduan</label>
                        <input type="date" class="form-control" name="tgl_aduan" required>
                    </div>

                    <div class="form-group">
                        <label for="isi_aduan">Isi Aduan</label>
                        <textarea name="isi_aduan" cols="100" rows="5" class="form-control" placeholder="Isi Aduan" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>

                    <div class="box-footer">
                        <button type="submit" name="add" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>