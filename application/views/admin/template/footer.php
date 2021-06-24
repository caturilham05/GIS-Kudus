<footer class="main-footer">
  <div>
    <b>Version</b> 2.4.0
  </div>
  <h5>Copyright &copy; <?= date('Y') ?>.&nbsp;<strong>Kominfo Kudus</strong>&nbsp;All Rights Reserved.</h5>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">Recent Activity</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

              <p>Will be 23 on April 24th</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-user bg-yellow"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

              <p>New phone +1(800)555-1234</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

              <p>nora@example.com</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-file-code-o bg-green"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

              <p>Execution time 5 seconds</p>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

      <h3 class="control-sidebar-heading">Tasks Progress</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Custom Template Design
              <span class="label label-danger pull-right">70%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Update Resume
              <span class="label label-success pull-right">95%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-success" style="width: 95%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Laravel Integration
              <span class="label label-warning pull-right">50%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Back End Framework
              <span class="label label-primary pull-right">68%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

    </div>
    <!-- /.tab-pane -->
    <!-- Stats tab content -->
    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
    <!-- /.tab-pane -->
    <!-- Settings tab content -->
    <div class="tab-pane" id="control-sidebar-settings-tab">
      <form method="post">
        <h3 class="control-sidebar-heading">General Settings</h3>

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Report panel usage
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Some information about this general settings option
          </p>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Allow mail redirect
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Other sets of options are available
          </p>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Expose author name in posts
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Allow the user to show his name in blog posts
          </p>
        </div>
        <!-- /.form-group -->

        <h3 class="control-sidebar-heading">Chat Settings</h3>

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Show me as online
            <input type="checkbox" class="pull-right" checked>
          </label>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Turn off notifications
            <input type="checkbox" class="pull-right">
          </label>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Delete chat history
            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
          </label>
        </div>
        <!-- /.form-group -->
      </form>
    </div>
    <!-- /.tab-pane -->
  </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url() ?>assets/template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/template/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>assets/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?= base_url() ?>assets/template/bower_components/raphael/raphael.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>assets/template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?= base_url() ?>assets/template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url() ?>assets/template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>assets/template/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/template/bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url() ?>assets/template/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= base_url() ?>assets/template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url() ?>assets/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url() ?>assets/template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>assets/template/bower_components/fastclick/lib/fastclick.js"></script>
<!-- Data Tables -->
<script src="<?= base_url() ?>assets/template/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/template/dist/js/demo.js"></script>
<!-- select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<!-- Google Maps API -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<!-- sweeetalert -->
<script src="<?= base_url('assets/sweetalert2.all.min.js') ?>"></script>



<script>
  var flashData       = $('#flash-data').data('berhasil');
  var flash_data_user = $('#flash_data_user').data('user_add');
  var flash_data_user = $('#flash_data_user').data('user_add');

  if (flashData) {
    Swal.fire({
      icon: "success",
      title: "Login Berhasil!",
      text: "Selamat Datang Kembali Admin",
    })
  }

  if (flash_data_user) {
    Swal.fire({
      icon: "success",
      title: "Pengguna Berhasil Terdaftar!",
      text: "Pengguna Berhasil Terdaftar!"
    })
  }
</script>


<script>
  $(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging': true,
      'lengthChange': false,
      'searching': false,
      'ordering': true,
      'info': true,
      'autoWidth': false
    })
  })
</script>

<script>
  $(document).ready(function() {
    $('.select2').select2({
      // minimumInputLength: 3
    });

  });
</script>

<script>
  var mymap = L.map('google__maps').setView(
    [-6.817537, 110.837372],
    13
  );

  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiY2F0dXJpbGhhbSIsImEiOiJja2VxemZub3UweGM2MnlvZW0xMDMyNTB3In0.CR8QAaGzebvP6F48X5Phmg', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 20,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiY2F0dXJpbGhhbSIsImEiOiJja2VxemZub3UweGM2MnlvZW0xMDMyNTB3In0.CR8QAaGzebvP6F48X5Phmg'
  }).addTo(mymap);

  <?php foreach ($tanda as $value) :?>
    var circle = L.circle([
      <?php if ($value->id_desa != 134) { ?>
        <?= $value->join_latitude_desa ?>, <?= $value->join_longitude_desa ?>
      <?php } elseif ($value->id_upt != 37) { ?>
        <?= $value->join_latitude_upt ?>, <?= $value->join_longitude_upt ?>
      <?php } elseif ($value->id_opd != 19) { ?>
        <?= $value->join_latitude_opd ?>, <?= $value->join_longitude_opd ?>
      <?php } ?>

    ], {
      color: 'rgba(255, 123, 0, 0.644)',
      fillColor: 'rgb(255, 123, 0)',
      fillOpacity: 0.8,
      radius: 150
    }).addTo(mymap);
  <?php endforeach ?>

  <?php foreach ($tanda as $marker) : ?>
    var marker = L.marker([
      <?php if ($marker->status == "belum diatasi") : ?>
        <?php if ($marker->id_desa != 134) { ?>
          <?= $marker->join_latitude_desa ?>, <?= $marker->join_longitude_desa ?>
        <?php } elseif ($marker->id_upt != 37) { ?>
          <?= $marker->join_latitude_upt ?>, <?= $marker->join_longitude_upt ?>
        <?php } elseif ($marker->id_opd != 19) { ?>
          <?= $marker->join_latitude_opd ?>, <?= $marker->join_longitude_opd ?>
        <?php } ?>
      <?php endif ?>
    ]).addTo(mymap);
    
    <?php if ($marker->status == "belum diatasi") { ?>
      marker.bindPopup(
        "<h4 class='text-center'><b>Informasi Aduan</b></h4><br><b>Nama Pelapor : </b> <?php echo ucfirst($marker->nama_pelapor) ?><br><br><b>Nama UPT: </b> <?= $marker->join_nama_upt ?><br><br><b>Nama OPD:</b> <?php echo $marker->join_nama_opd ?><br><br><b>Desa : </b> <?php echo $marker->join_nama_desa ?><br><br><b>Tanggal Aduan : </b><?= date('d/F/Y', strtotime($marker->tgl_aduan)) ?><br><br><b>Isi Aduan : </b><?= ucfirst($marker->isi_aduan) ?><br><br><b>Latitude : </b> <?php if ($marker->id_desa != 134) { ?>
          <?= $marker->join_latitude_desa ?> <?php } elseif ($marker->id_upt != 37) { ?> <?= $marker->join_latitude_upt ?> <?php } elseif ($marker->id_opd != 19) { ?> <?= $marker->join_latitude_opd ?> <?php } ?> <br><br><b>Longitude : </b> <?php if ($marker->id_desa != 134) { ?>
                        <?= $marker->join_longitude_desa ?>
                      <?php } elseif ($marker->id_upt != 37) { ?>
                        <?= $marker->join_longitude_upt ?>
                      <?php } elseif ($marker->id_opd != 19) { ?>
                        <?= $marker->join_longitude_opd ?>
                      <?php } ?><br><br><img src='<?= base_url('uploads/' . $marker->gambar) ?>' style='width: 200px; height: 200px;'><br><br>"
                      );
            <?php } ?> 
  <?php endforeach ?>

</script>
</body>
</html>