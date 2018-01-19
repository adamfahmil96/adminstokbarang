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
                  <label for="varchar" class="col-sm-2 control-label">ID Pembeli <?php echo form_error('id_pembeli') ?></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_pembeli" id="id_pembeli" placeholder="ID Pembeli" value="<?php echo $id_pembeli; ?>" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="varchar" class="col-sm-2 control-label">Nama Pembeli <?php echo form_error('nama_pembeli') ?></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_pembeli" id="nama_pembeli" placeholder="Nama Pembeli" value="<?php echo $nama_pembeli; ?>" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="varchar" class="col-sm-2 control-label">Alamat Pembeli <?php echo form_error('alamat_pembeli') ?></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat_pembeli" id="alamat_pembeli" placeholder="Alamat Pembeli" value="<?php echo $alamat_pembeli; ?>" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="varchar" class="col-sm-2 control-label">Telp Pembeli <?php echo form_error('telp_pembeli') ?></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="telp_pembeli" id="telp_pembeli" placeholder="Telp Pembeli" value="<?php echo $telp_pembeli; ?>" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="varchar" class="col-sm-2 control-label">Status Pembeli <?php echo form_error('status_pembeli') ?></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="status_pembeli" id="status_pembeli" placeholder="Status Pembeli" value="<?php echo $status_pembeli; ?>" />
                  </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
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
</body>
</html>
