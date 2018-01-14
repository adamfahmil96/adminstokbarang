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
        <section class="content">
          <div class="col-lg-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Tabel Barang</h3>
                <?php echo anchor(site_url('C_barang/excel'), 'Expor ke Excel', 'class="btn btn-primary btn-info"'); ?>
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                		<th>ID Barang</th>
                		<th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                		<th>Harga Barang</th>
                		<th>Menu</th>
                  </tr>
                  </thead>
                  <tbody><?php
                  foreach ($c_barang_hrv_data as $c_barang_hrv)
                  {
                    ?>
                    <tr>
                			<td><?php echo ++$start ?></td>
                      <td><?php echo $c_barang_hrv->id_jenis ?><?php echo $c_barang_hrv->id_merk ?></td>
                			<td><?php echo $c_barang_hrv->nama_barang ?></td>
                			<td><?php echo $c_barang_hrv->jumlah_barang ?></td>
                			<td>Rp <?php echo $c_barang_hrv->harga_barang ?></td>
                			<td style="text-align:center">
                				<?php
                				echo anchor(site_url('C_barang/update/'.$c_barang_hrv->id),'<i class="glyphicon glyphicon-edit" data-toggle="tooltip" title="Ubah"></i>');
                				echo "\t\t | \t\t";
                				echo anchor(site_url('C_barang/delete/'.$c_barang_hrv->id),'<i class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus"></i>','onclick="javasciprt: return confirm(\'Apakah Anda yakin ?\')"');
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

    <input id="getBaseURL" type="hidden" class="default-hidden" value="<?php echo base_url();?>" />

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
