<!DOCTYPE html>
<html lang="en">

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
            <h1 class="page-header">Jenis Barang</h1>
          </div>
        </section>
        <section class="content">
          <div class="col-lg-12">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Tambah Jenis Barang</h3>
              </div>
              <!-- /.box-header -->
              <form class="form-horizontal" action="<?php echo $action; ?>" method="post">
                <div class="box-body">
            	    <div class="form-group">
                    <label for="varchar" class="col-sm-2 control-label">ID Jenis <?php echo form_error('id_jenis') ?></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="id_jenis" id="id_jenis" placeholder="ID Jenis" value="<?php echo $id_jenis; ?>" />
                    </div>
                  </div>
            	    <div class="form-group">
                    <label for="varchar" class="col-sm-2 control-label">Jenis Barang <?php echo form_error('jenis') ?></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis Barang" value="<?php echo $jenis; ?>" />
                    </div>
                  </div>
                  <input type="hidden" name="flag_jenis" id="flag_jenis" value="0" />
                  <input type="hidden" name="id" value="<?php echo $id; ?>" />
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <a href="<?php echo site_url('C_jenis') ?>" class="btn btn-default">Cancel</a>
            	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                </div>
            	</form>
            </div>
            <!-- /.panel -->
          </div>
          <!-- /.col-lg-12 -->
        </section>
        <!-- /.section -->
      </div>
      <!-- /#page-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2017 - Developer by <a href="http://adamfahmil.my.id/" target="_blank">Adam Fahmil</a>.</strong> All rights reserved.
      </footer>
    </div>
    <!-- /#wrapper -->

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
