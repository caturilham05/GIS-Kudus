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
                    <?php echo form_open('add-teknisi'); ?>
                    <!-- <form action="<?//php echo site_url('register-proses') ?>" method="post" enctype="multipart/form-data"> -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <?php echo form_error('username'); ?>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <label for="username">Nama Lengkap</label>
                            <?php echo form_error('name') ? '<br><span style="color: red;"><b>Nama Lengkap Tidak Boleh Kosong</b></span>' : NULL; ?>
                            <input type="text" class="form-control" name="name" placeholder="Nama Lengkap">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <?php echo form_error('password') ? '<br><span style="color: red;"><b>Password Minimal 5 Karakter</b></span>' : NULL; ?>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label for="passconf">Konfirmasi Password</label>
                            <?php echo form_error('passconf') ? '<br><span style="color: red;"><b>Password Konfirmasi Tidak Sesuai Dengan Password</b></span>' : NULL; ?>
                            <input type="password" class="form-control" name="passconf" placeholder="Konfirmasi Password">
                        </div>

                        <div class="form-group">
                            <label for="no_telp">Nomor Handphone</label>
                            <?php echo form_error('no_telp') ? '<br><span style="color: red;"><b>Nomor Telepon Tidak Boleh Kosong</b></span>' : NULL; ?>
                            <input type="number" class="form-control" name="no_telp" placeholder="08xxxxxxxx">
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