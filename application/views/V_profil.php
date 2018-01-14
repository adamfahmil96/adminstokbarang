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
              <h1 class="page-header">Profil Pengguna</h1>
          </div>
        </section>
        <!-- /.content-header -->
        <section class="content">
          <div class="col-lg-12">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Edit Data Profil</h3>
              </div>
              <!-- /.box-header -->
              <form class="form-horizontal" action="<?php echo $action; ?>" method="post">
                <div class="box-body">
            	    <div class="form-group">
                    <label for="varchar" class="col-sm-2 control-label">Name <?php echo form_error('name') ?></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
                    </div>
                  </div>
            	    <div class="form-group">
                    <label for="varchar" class="col-sm-2 control-label">Username <?php echo form_error('username') ?></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
                    </div>
                  </div>
            	    <div class="form-group">
                    <label for="varchar" class="col-sm-2 control-label">Password <?php echo form_error('password') ?></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
                    </div>
                  </div>
            	    <div class="form-group">
                    <label for="varchar" class="col-sm-2 control-label">Email <?php echo form_error('email') ?></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
                    </div>
                  </div>
            	    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <a href="<?php echo site_url('c_users_hrv') ?>" class="btn btn-default">Cancel</a>
            	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                </div>
            	</form>
            </div>
          </div>
          <!-- /.col-lg-12 -->
        </section>
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
