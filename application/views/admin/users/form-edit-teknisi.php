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
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="username">Username</label>
                                <?php echo form_error('username'); ?>
                                <input type="hidden" class="form-control" name="id_teknisi" value="<?= $this->input->post('id_teknisi') ?? $id_teknisi ?>">
                                <input type="text" class="form-control" name="username" value="<?= $this->input->post('username') ?? $username ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <?php echo form_error('name') ? '<br><span style="color: red;"><b>Nama Lengkap Tidak Boleh Kosong</b></span>' : NULL; ?>
                                <input type="text" class="form-control" name="name" value="<?= $this->input->post('name') ?? $name ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <?php echo form_error('password') ? '<br><span style="color: red;"><b>Password Minimal 5 Karakter</b></span>' : NULL; ?>
                                <input type="password" class="form-control" name="password" value="<?= $this->input->post('password') ?>" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="passconf">Konfirmasi Password</label>
                                <?php echo form_error('passconf') ? '<br><span style="color: red;"><b>Password Konfirmasi Tidak Sesuai Dengan Password</b></span>' : NULL; ?>
                                <input type="password" class="form-control" name="passconf" placeholder="Konfirmasi Password">
                            </div>

                            <div class="form-group">
                                <label for="old_password">Password Lama</label>
                                <?php echo form_error('old_password') ? '<br><span style="color: red;"><b>Password Yang Anda Masukkan Salah</b></span>' : NULL; ?>
                                <input type="password" class="form-control" name="old_password" value="<?= $this->input->post('old_password') ?>" placeholder="Password Lama">
                            </div>

                            <div class="form-group">
                                <label for="no_telp">Nomor Handphone</label>
                                <?php echo form_error('no_telp'); ?>
                                <input type="number" class="form-control" name="no_telp" value="<?= $this->input->post('no_telp') ?? $no_telp ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label> <small>(Biarkan Jika Tidak Dipilih)</small>
                                <select name="status" class="form-control">
                                    <option value="">- Status -</option>
                                    <option value="0" <?= $status == 0 ? "selected" : null ?>>Tidak Aktif</option>
                                    <option value="1" <?= $status == 1 ? "selected" : null ?>>Aktif</option>
                                </select>
                            </div>


                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- akhirrrr inti dari content tabel -->
            </div>
        </div>
    </section>
</div>