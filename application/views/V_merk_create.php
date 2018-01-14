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
                <h1 class="page-header">Merk Barang</h1>
            </div>
        </section>
        <!-- /.content-header -->
        <section class="content">
          <div class="col-lg-12">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Tambah Merk Barang</h3>
              </div>
              <!-- /.box-header -->
              <form class="form-horizontal" action="<?php echo $action; ?>" method="post">
                <div class="box-body">
            	    <div class="form-group">
                    <label for="varchar" class="col-sm-2 control-label">ID Merk <?php echo form_error('id_merk') ?></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="id_merk" id="id_merk" placeholder="ID Merk" value="<?php echo $id_merk; ?>" />
                    </div>
                  </div>
            	    <div class="form-group">
                    <label for="varchar" class="col-sm-2 control-label">Merk Barang <?php echo form_error('merk') ?></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="merk" id="merk" placeholder="Merk Barang" value="<?php echo $merk; ?>" />
                    </div>
                  </div>
                  <input type="hidden" name="flag_merk" id="flag_merk" value="0" />
            	    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <a href="<?php echo site_url('C_merk') ?>" class="btn btn-default">Cancel</a>
            	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                </div>
            	</form>
            </div>
            <!-- /.box box-info -->
          </div>
          <!-- /.col-lg-12 -->
        </div>
        <!-- /.content -->
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
