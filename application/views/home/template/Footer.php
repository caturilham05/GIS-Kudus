<footer class="footer text-light text-center">
    <div class="aa">
        <span class="bb">Copyright &copy; <?= date('Y') ?>.&nbsp;<strong>Dinas Komunikasi Dan Informatika Kudus</strong>&nbsp;All Rights Reserved.</span>
    </div>
</footer>



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="<?php echo ('assets/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<!-- Google Maps API -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<!-- Data Tables -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<!-- sweetalert -->
<script src="<?= base_url('assets/sweetalert2.all.min.js') ?>"></script>


<!-- <script src="<?= base_url() ?>assets/template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->



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

// sweet alert
  var flashData = $('#flash-data').data('berhasil');
  var edit_flash_data = $('#flash_edit').data('edit');
  console.log(edit_flash_data);
  if (flashData) {
    Swal.fire({
      icon: "success",
      title: "Formulir Pengaduan Berhasil Disimpan",
      text: "Terima Kasih Atas Pengaduan Yang Anda Berikan"
    })
  }

  if (edit_flash_data)
  {
    Swal.fire({
      icon: "success",
      title: "Pengaduan Berhasil Dibatalkan",
      text: "Terima Kasih Atas Pengaduan Yang Anda Berikan"
    })
  }
</script>


<script>
  $(document).ready(function() {
		$('.select2').select2({});

	});
</script>

<!-- Form Peengaduan -->
<!-- <script>
  var map = L.map('maps__pengaduan').setView(
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
  }).addTo(map);

  var latInput = document.querySelector("[name=lat]");
  var lngInput = document.querySelector("[name=lng]");
  var marker;
  map.on('click', function(e) {
    var lat = e.latlng.lat;
    var lng = e.latlng.lng;
    if (!marker) {
      marker = L.marker(e.latlng).addTo(map);
    }else{
      marker.setLatLng(e.latlng);
    }

    latInput.value = lat;
    lngInput.value = lng;

  });
</script> -->

<!-- <script> -->
  <!-- // MAPS DARI HALAMAN DESA
  var map = L.map('form__pengaduan').setView(
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
  }).addTo(map);

</script> -->



</body>

</html>