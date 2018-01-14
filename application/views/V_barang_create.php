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
            <h1 class="page-header">Barang</h1>
          </div>
        </section>
        <!-- /#content-header -->
        <section class="content">
          <div class="col-lg-12">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Tambah Barang</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?php echo $action; ?>" method="post">
                <div class="box-body">
                  <div class="form-group">
                    <label for="varchar" class="col-sm-2 control-label">Jenis <?php echo form_error('id_jenis') ?></label>
                    <div class="col-sm-10">
                      <select name="id_jenis" class="form-control">
                        <?php foreach ($data_jenis_hrv as $data_jenis)
                         { ?>
                          <option value="<?php echo $data_jenis->id_jenis ?>"><?php echo $data_jenis->jenis ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="varchar" class="col-sm-2 control-label">Merk <?php echo form_error('id_merk') ?></label>
                    <div class="col-sm-10">
                      <select name="id_merk" class="form-control">
                        <?php foreach ($data_merk_hrv as $data_merk)
                         { ?>
                          <option value="<?php echo $data_merk->id_merk ?>"><?php echo $data_merk->merk ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="varchar" class="col-sm-2 control-label">Nama <?php echo form_error('nama_barang') ?></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Tuliskan nama barang" value="<?php echo $nama_barang; ?>" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bigint" class="col-sm-2 control-label">Jumlah <?php echo form_error('jumlah_barang') ?></label>
                    <div class="col-sm-10">
                      <input type="number" min="0" class="form-control" name="jumlah_barang" id="jumlah_barang" placeholder="Masukkan jumlah barang" value="<?php echo $jumlah_barang; ?>" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="int" class="col-sm-2 control-label">Harga per Satuan (Rp)<?php echo form_error('harga_barang') ?></label>
                    <div class="col-sm-10">
                      <input type="number" min="1" class="form-control" name="harga_barang" id="harga_barang" placeholder="Harga Barang" value="<?php echo $harga_barang; ?>" />
                    </div>
                  </div>
                    <input type="hidden" name="waktu_tambah" id="waktu_tambah" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date('Y-m-d H:i:s'); ?>" />
                    <input type="hidden" name="waktu_update" id="waktu_update" value="0000-00-00 00:00:00" />
                    <input type="hidden" name="flag_barang" id="flag_barang" value="0" />
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <a href="<?php echo site_url('C_barang') ?>" class="btn btn-default">Cancel</a>
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
