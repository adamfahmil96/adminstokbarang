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
                      Tabel Barang
                  </div>
                  <div class="panel-body">
                    <div class="row" style="margin-bottom: 10px">
                      <div class="col-md-4">
                        <?php echo anchor(site_url('C_barang/create'),'Tambah', 'class="btn btn-primary"'); ?>
                      </div>
                      <div class="col-md-4 text-center">
                        <div style="margin-top: 8px" id="message">
                          <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                        </div>
                      </div>
                      <div class="col-md-1 text-right"></div>
                      <div class="col-md-3 text-right">
                        <form action="<?php echo site_url('C_barang/index'); ?>" class="form-inline" method="get">
                          <div class="input-group">
                            <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                            <span class="input-group-btn">
                              <?php
                                  if ($q <> '')
                                  {
                                    ?>
                                    <a href="<?php echo site_url('C_barang'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                  }
                              ?>
                              <button class="btn btn-primary" type="submit">Cari</button>
                            </span>
                          </div>
                        </form>
                      </div>
                    </div>
                    <table class="table table-bordered" style="margin-bottom: 10px">
                      <tr>
                        <th>No</th>
                    		<th>ID Barang</th>
                    		<th>Nama Barang</th>
                        <th>Jumlah Barang</th>
                    		<th>Harga Barang</th>
                    		<th>Menu</th>
                      </tr><?php
                      foreach ($c_barang_hrv_data as $c_barang_hrv)
                      {
                        ?>
                        <tr>
                    			<td width="80px"><?php echo ++$start ?></td>
                          <td><?php echo $c_barang_hrv->id_jenis ?><?php echo $c_barang_hrv->id_merk ?></td>
                    			<td><?php echo $c_barang_hrv->nama_barang ?></td>
                    			<td><?php echo $c_barang_hrv->jumlah_barang ?></td>
                    			<td><?php echo $c_barang_hrv->harga_barang ?></td>
                    			<td style="text-align:center" width="200px">
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
                    </table>
                    <div class="row">
                      <div class="col-md-6">
                        <a class="btn btn-primary">Total : <?php echo $total_rows ?></a>
                    		<?php echo anchor(site_url('c_barang_hrv/excel'), 'Excel', 'class="btn btn-primary"'); ?>
                	    </div>
                      <div class="col-md-6 text-right">
                          <?php echo $pagination ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
