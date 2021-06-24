<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $breadcrumb ?>
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Dashboard</li>
            <li class="active"><?= $breadcrumb ?></li>
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
                        <h3 class="text-center"><?= $breadcrumb ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="<?php echo site_url('register-proses') ?>" method="post" enctype="multipart/form-data">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="hidden" class="form-control" name="user_id" value="<?= $row->user_id?>">
                                <input type="text" class="form-control" name="username" value="<?= $this->input->post('username') ?? $row->username ?>" required>
                            </div>


                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" value="<?= $this->input->post('password') ?>">
                            </div>

                            <div class="form-group">
                                <label for="join_desa">Desa</label>  <small>(Biarkan Jika Tidak Dipilih)</small>
                                <select name="join_desa" class="form-control select2" >
                                    <option value="">- Pilih Desa -</option>
                                    <?php foreach ($join_desa as $join) { ?>
                                        <option value="<?= $join->id_desa ?>" <?= $join->id_desa == $row->id_desa ? "selected" : null ?>><?= $join->desa ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="join_upt">Unit Kerja</label> <small>(Biarkan Jika Tidak Dipilih)</small>
                                <select name="join_upt" class="form-control select2" >
                                    <option value="">- Pilih Unit Kerja -</option>
                                    <?php foreach ($join_upt as $join) { ?>
                                        <option value="<?= $join->id_upt ?>" <?= $join->id_upt == $row->id_upt ? "selected" : null ?>><?= $join->nama_upt ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="join_opd">OPD</label> <small>(Biarkan Jika Tidak Dipilih)</small>
                                <select name="join_opd" class="form-control select2" >
                                    <option value="">- Pilih OPD -</option>
                                    <?php foreach ($join_opd as $join) { ?>
                                        <option value="<?= $join->id_opd ?>" <?= $join->id_opd == $row->id_opd ? "selected" : null ?>><?= $join->nama_opd ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="no_telp">Nomor Handphone</label>
                                <input type="number" class="form-control" name="no_telp" value="<?= $this->input->post('no_telp') ?? $row->no_telp ?>" required>
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