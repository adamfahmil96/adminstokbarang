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
                  <h1 class="page-header">Barang</h1>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Ubah Barang
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                        <form action="<?php echo $action; ?>" method="post">
                          <div class="form-group">
                                <label for="varchar">Jenis <?php echo form_error('id_jenis') ?></label>
                                <select name="id_jenis" class="form-control">
                                  <option value="<?php echo $id_jenis; ?>">
                                    <?php foreach ($data_jenis_hrv as $data_jenis)
                                    {
                                      if ($data_jenis->id_jenis == $id_jenis) {
                                        echo $data_jenis->jenis;
                                      }
                                    } ?>
                                  </option>
                                  <?php foreach ($data_jenis_hrv as $data_jenis)
                                   { ?>
                                    <option value="<?php echo $data_jenis->id_jenis ?>"><?php echo $data_jenis->jenis ?></option>
                                  <?php } ?>
                                </select>
                            </div>
                    	    <div class="form-group">
                                <label for="varchar">Merk <?php echo form_error('id_merk') ?></label>
                                <select name="id_merk" class="form-control">
                                  <option value="<?php echo $id_merk; ?>">
                                    <?php foreach ($data_merk_hrv as $data_merk)
                                    {
                                      if ($data_merk->id_merk == $id_merk) {
                                        echo $data_merk->merk;
                                      }
                                    } ?>
                                  </option>
                                  <?php foreach ($data_merk_hrv as $data_merk)
                                   { ?>
                                    <option value="<?php echo $data_merk->id_merk ?>"><?php echo $data_merk->merk ?></option>
                                  <?php } ?>
                                </select>
                            </div>
                    	    <div class="form-group">
                                <label for="varchar">Nama Barang <?php echo form_error('nama_barang') ?></label>
                                <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang" value="<?php echo $nama_barang; ?>" />
                            </div>
                    	    <div class="form-group">
                                <label for="bigint">Jumlah <?php echo form_error('jumlah_barang') ?></label>
                                <input type="number" min="0" class="form-control" name="jumlah_barang" id="jumlah_barang" placeholder="Jumlah Barang" value="<?php echo $jumlah_barang; ?>" />
                            </div>
                    	    <div class="form-group">
                                <label for="int">Harga per Satuan <?php echo form_error('harga_barang') ?></label>
                                <input type="number" min="1" class="form-control" name="harga_barang" id="harga_barang" placeholder="Harga Barang" value="<?php echo $harga_barang; ?>" />
                            </div>
                          <input type="hidden" name="waktu_tambah" id="waktu_tambah" value="<?php echo $waktu_tambah; ?>" />
                          <input type="hidden" name="waktu_update" id="waktu_update" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date('Y-m-d H:i:s'); ?>" />
                          <input type="hidden" name="flag_barang" id="flag_barang" value="<?php echo $flag_barang; ?>" />
                    	    <input type="hidden" name="id" value="<?php echo $id_barang; ?>" />
                    	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                    	    <a href="<?php echo site_url('C_barang') ?>" class="btn btn-default">Cancel</a>
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
