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
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Tabel Jenis Barang</h3>
                <!-- Menambahkan Jenis Barang -->
                <?php echo anchor(site_url('C_jenis/create'),'Tambah', 'class="btn btn-success"'); ?>
                <!-- Mengekspor ke Excel -->
                <?php echo anchor(site_url('C_jenis/excel'), 'Ekspor ke Excel', 'class="btn btn-info"'); ?>
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
              </div>
              <!-- /.box header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Jenis</th>
                        <th>Jenis Barang</th>
                        <th>Menu</th>
                    </tr>
                  </thead>
                  <tbody><?php
                    foreach ($c_jenis_hrv_data as $c_jenis_hrv)
                    {?>
                      <tr>
                        <td width="80px"><?php echo ++$start ?></td>
                        <td><?php echo $c_jenis_hrv->id_jenis ?></td>
                        <td><?php echo $c_jenis_hrv->jenis ?></td>
                        <td style="text-align:center" width="200px">
                          <?php
                          echo anchor(site_url('C_Jenis/update/'.$c_jenis_hrv->id),'<i class="glyphicon glyphicon-edit" data-toggle="tooltip" title="Ubah"></i>');
                          echo "\t\t | \t\t";
                          echo anchor(site_url('C_jenis/delete/'.$c_jenis_hrv->id),'<i class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus"></i>','onclick="javasciprt: return confirm(\'Apakah Anda yakin ?\')"');
                          ?>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.col-lg-12 -->
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

    <!-- jQuery 3 -->
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
    </script>
</body>

</html>
