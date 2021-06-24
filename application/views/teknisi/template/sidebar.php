<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= base_url() ?>assets/template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('name'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li <?= $this->uri->segment(1) == 'teknisi' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
        <a href="<?= site_url('teknisi') ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li <?= $this->uri->segment(1) == 'teknisi-data-pengaduan' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
        <a href="<?= site_url('teknisi-data-pengaduan') ?>">
          <i class="fa fa-bell"></i><span>Data Pengaduan</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>