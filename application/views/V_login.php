<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Program Stok Barang-nya bulik di Batang, Pekalongan">
    <meta name="author" content="Muhammad Adam Fahmil 'Ilmi'">

    <title>Toko Ambar</title>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <br><br>
              <h2 align="center">Program Toko Ambar</h2>
              <br><br>
              <div class="login-panel panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Silahkan Masuk</h3>
                </div>
                <div class="panel-body">
                  <form role="form" action="<?php echo site_url('C_login/aksi_login');?>" method="post">
                    <fieldset>
                      <div class="form-group">
                        <input class="form-control" placeholder="Username" name="username" type="username" autofocus required>
                      </div>
                      <div class="form-group">
                        <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                      </div>
                      <div class="form-group">
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Masuk">
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
              <br><br>
              <p align="center">Created by: <a href="http://adamfahmil.my.id/" target="_blank">Adam Fahmil</a></p>
              <p align="center">&copy 2017</p>
            </div>
        </div>
    </div>

    <!-- jQuery 3 -->
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>

</body>

</html>
