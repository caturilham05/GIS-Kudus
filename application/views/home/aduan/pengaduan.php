<div class="wrapp">
    <div id="flash_edit" data-edit="<?php echo $this->session->flashdata('success') ?>"></div>
    <section class="atas">
        <center>
            <h2>Detail Pengaduan</h2>
        </center>
        <h2 class="text-center tulisan"></h2>
        <center>
            <div class="garisan"></div>
        </center>
    </section>

    <section class="mt-5 aduan">
        <div class="container-fluid">
            <div class="table-responsive">
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
                        foreach ($get_data as $value) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo ucfirst($value['nama_pelapor']) ?></td>
                                <td><?php echo date('d M Y', strtotime($value['tgl_aduan'])) ?></td>
                                <td><b><?php echo ucfirst($value['isi_aduan']) ?></b></td>
                                <td><b><?php echo $value['status'] ?></b></td>
                                <td class="text-center">
                                    <?php if (($value['status'] == 'cancel') or ($value['status'] == 'selesai diatasi')) { ?>
                                        <h5><b><?php echo $value['status'] ?></b></h5>
                                    <?php } else { ?>
                                        <a href="<?php echo site_url('edit-pengaduan/' . $value['id_pengaduan']) ?>" class="btn btn-danger btn-disabled">Cancel</a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <div class="push"></div>
</div>