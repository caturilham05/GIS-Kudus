<nav class="navbar navbar-expand-lg menu navbar-light ">
  <div class="container">
    <img src="<?= base_url('assets/img/logo.png') ?>" alt="logo" width="50px" class="mr-1">
    <a class="navbar-brands " href="<?= site_url('/') ?>">SIG KUDUS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="color:white;"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <!-- kondisional navbar -->
        <?php if ($this->session->userdata('username')) { ?>
          <li class="nav-item">
            <a class="nav-links" href="<?= site_url('/') ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-links" href="<?= site_url('pengaduan') ?>">Pengaduan</a>
          </li>
          <li class="nav-item">
            <a class="nav-links" href="<?= site_url('logout-user') ?>">Keluar</a>
          </li>
          <li class="nav-item">
            <h5 class="nav-links"><small>Selamat Datang, <?php echo ucfirst($this->session->userdata('username')) ?></small></h5>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-links" href="<?= site_url('auth-login') ?>">Login</a>
          </li>
        <?php } ?>
        <!--end kondisional navbar -->
      </ul>
    </div>
  </div>
</nav>