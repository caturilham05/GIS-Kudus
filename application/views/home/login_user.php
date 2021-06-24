<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
  <!DOCTYPE html>
<html>
  
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $judul ?></title>
  <link rel="icon" href="<?= base_url() ?>assets/img/icon.png">

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<div id="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Pengguna</b>Masuk</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Silahkan Masuk</p>

      <form action="<?php echo site_url('auth-login') ?>" method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="username" placeholder="username"  />
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
          <?= form_error('username', '<div class="text-danger text-small"></div>')?>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Password"  />
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <?= form_error('password', '<div class="text-danger text-small"></div>')?>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Ingat Saya?
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" name="pengguna" class="btn btn-primary btn-block btn-flat">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-box-body -->
  </div>

  <script src="<?php echo base_url() ?>assets/template/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url() ?>assets/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url() ?>assets/template/plugins/iCheck/icheck.min.js"></script>
  <!-- sweetalert -->
  <script src="<?= base_url('assets/sweetalert2.all.min.js') ?>"></script>
  <!-- <script src="<?= base_url('assets/popup.js') ?>"></script> -->


  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>

  <script>
    var flashData = $('#flash-data').data('flashdata');
    // console.log(flashData);

    if (flashData) {
      Swal.fire({
        icon: "success",
        title: "Logout Berhasil!",
        text: "Jangan Lupa Beristirahat",
      })
    }
    //   else{
    //     Swal.fire({
    //     title: "Login Gagal",
    //     text: "Username atau Password Anda Tidak terdaftar",
    //     icon: "error",
    //   });
    // }
  </script>
  <script>
    // $("#gagal").click(function(){

    //   swal.fire({
    //     title : "Login Gagal!",
    //     text : "Password atau Username Yang Anda Masukkan Salah",
    //     icon : "Warning",
    //   })
    // })
    // var masuk = $('#salah').data('gagal');

    // if(masuk){
    //     swal.fire({
    //     title : "Login Gagal!",
    //     text : "Password atau Username Yang Anda Masukkan Salah",
    //     icon : "Warning",
    //   })
    // }
  </script>

</body>

</html>