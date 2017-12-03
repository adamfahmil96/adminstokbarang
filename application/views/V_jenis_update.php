<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('template/V_header.php'); ?>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('template/V_navbar.php'); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">Jenis Barang</h1>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Ubah Jenis Barang
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                        <form action="<?php echo $action; ?>" method="post">
                    	    <div class="form-group">
                                <label for="varchar">ID Jenis <?php echo form_error('id_jenis') ?></label>
                                <input type="text" class="form-control" name="id_jenis" id="id_jenis" placeholder="ID Jenis" value="<?php echo $id_jenis; ?>" />
                            </div>
                    	    <div class="form-group">
                                <label for="varchar">Jenis Barang <?php echo form_error('jenis') ?></label>
                                <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis Barang" value="<?php echo $jenis; ?>" />
                            </div>
                          <input type="hidden" name="flag_jenis" id="flag_jenis" value="<?php echo $flag_jenis; ?>" />
                          <input type="hidden" name="id" value="<?php echo $id_jenis_barang; ?>" />
                    	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                    	    <a href="<?php echo site_url('C_jenis') ?>" class="btn btn-default">Cancel</a>
                      	</form>
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <input id="getBaseURL" type="hidden" class="default-hidden" value="<?php echo base_url();?>" />

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    <!-- <script src='<?php //echo base_url();?>assets/js/js_jenis.js'></script> -->
</body>

</html>
