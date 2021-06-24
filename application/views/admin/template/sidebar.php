<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= base_url() ?>assets/template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Admin</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>

      <li <?= $this->uri->segment(1) == 'administrator' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
        <a href="<?= site_url('administrator') ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li class="treeview <?= $this->uri->segment(1) == 'laporan%20pengaduan' || $this->uri->segment(1) == 'data-pengaduan'  ? 'active'  : '' ?>">
        <a href="#">
          <i class="fa fa-bell"></i>
          <span>Pengaduan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?= $this->uri->segment(1) == 'data-pengaduan' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
            <a href="<?= site_url('data-pengaduan') ?>"><i class="fa fa-circle-o"></i>data Pengaduan</a>
          </li>

          <li <?= $this->uri->segment(1) == 'laporan%20pengaduan' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
            <a href="<?= site_url('laporan%20pengaduan') ?>"><i class="fa fa-circle-o"></i>Laporan Pengaduan</a>
          </li>
        </ul>
      </li>

      <li class="treeview <?= $this->uri->segment(1) == 'data-desa' || $this->uri->segment(1) == 'data-opd' || $this->uri->segment(1) == 'data-upt'  ? 'active'  : '' ?>">
        <a href="#">
          <i class="fa fa-file-text"></i>
          <span>Data Keseluruhan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?= $this->uri->segment(1) == 'data-desa' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
            <a href="<?= site_url('data-desa') ?>"><i class="fa fa-circle-o"></i>Data Desa</a>
          </li>
          <li <?= $this->uri->segment(1) == 'data-opd' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
            <a href="<?= site_url('data-opd') ?>"><i class="fa fa-circle-o"></i>Data OPD</a>
          </li>
          <li <?= $this->uri->segment(1) == 'data-upt' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
            <a href="<?= site_url('data-upt') ?>"><i class="fa fa-circle-o"></i>Data UPT</a>
          </li>
        </ul>
      </li>

      <li class="header" style="margin-top: 30px">MEMBER AREA</li>
      <li <?= $this->uri->segment(1) == 'users' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
        <a href="<?= site_url('users') ?>"><i class="fa fa-user"></i> <span>Users</span></a>
      </li>
      <li <?= $this->uri->segment(1) == 'data-teknisi' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
        <a href="<?= site_url('data-teknisi') ?>"><i class="fa fa-user"></i> <span>Teknisi</span></a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>