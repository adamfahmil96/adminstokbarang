<!doctype html>
<html>
<head>
  <?php include('template/V_header.php'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Navigation -->
    <?php include('template/V_navbar.php'); ?>
    <!-- Page Content -->
    <div class="content-wrapper">
      <section class="content-header">
        <div class="col-lg-12">
          <h1 class="page-header">Pembeli</h1>
        </div>
      </section>
      <!-- /#content-header -->
      <section class="content">
        <div class="col-lg-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Pembeli</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo $action; ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="varchar" class="col-sm-2 control-label">Nama Pembeli <?php echo form_error('nama_pembeli') ?></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_pembeli" id="nama_pembeli" placeholder="Tuliskan nama pembeli" value="<?php echo $nama_pembeli; ?>" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="varchar" class="col-sm-2 control-label">Alamat Pembeli <?php echo form_error('alamat_pembeli') ?></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat_pembeli" id="alamat_pembeli" placeholder="Masukkan alamat pembeli" value="<?php echo $alamat_pembeli; ?>" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="varchar" class="col-sm-2 control-label">Telp Pembeli <?php echo form_error('telp_pembeli') ?></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="telp_pembeli" id="telp_pembeli" placeholder="Masukkan telepon pembeli" value="<?php echo $telp_pembeli; ?>" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="varchar" class="col-sm-2 control-label">Status Pembeli <?php echo form_error('status_pembeli') ?></label>
                  <div class="col-sm-10">
                    <select name="status_pembeli" class="form-control">
                      <option value="<?php echo $status_pembeli; ?>">
                        <?php
                          if ($status_pembeli == "P") {
                            echo "Pelanggan";
                            $cek = "P";
                          } elseif ($status_pembeli == "K") {
                            echo "Konsumen";
                            $cek = "K";
                          }
                        ?>
                      </option>
                      <option value="<?php if($cek == "P"){echo "K";} elseif($cek == "K"){echo "P";} ?>">
                        <?php
                          if ($cek == "P") {
                            echo "Konsumen";
                          } elseif ($cek == "K") {
                            echo "Pelanggan";
                          }
                        ?>
                      </option>
                    </select>
                  </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <input type="hidden" name="id_pembeli" id="id_pembeli" value="<?php echo $id_pembeli; ?>" />
                <input type="hidden" name="flag_pembeli" value="0" />
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo site_url('C_pembeli') ?>" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary pull-right"><?php echo $button ?></button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </section>
    </div>
    <!-- /#page-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy; 2017 - Developer by <a href="http://adamfahmil.my.id/" target="_blank">Adam Fahmil</a>.</strong> All rights reserved.
    </footer>
  </div>

  <input id="getBaseURL" type="hidden" class="default-hidden" value="<?php echo base_url();?>" />

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
