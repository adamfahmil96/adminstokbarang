<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('template/V_header.php'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div id="wrapper">
      <!-- Navigation -->
      <?php include('template/V_navbar.php'); ?>
      <!-- Page Content -->
      <div class="content-wrapper">
        <section class="content-header">
          <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
          </div>
        </section>
        <!-- /#content-header -->
        <section class="content">
          <div class="col-lg-12">
            <div class="tab-content" style="background-color: rgb(236, 240, 245); padding: 5px 0 0;">
              <div class="box box-solid box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><b>Menu Program</b></h3>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-lg-4 col-xs-4">
                          <!-- small box -->
                          <div class="small-box bg-green">
                            <div class="inner">
                              <h3>Tambah <br> Barang</h3>
                              <p>Menambahkan Barang Baru</p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-plus"></i>
                            </div>
                            <a href="<?php echo site_url("C_barang/create");?>" class="small-box-footer">
                              Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                            </a>
                          </div>
                        </div>
                        <!-- /.Widget Tambah Barang -->
                        <div class="col-lg-4 col-xs-4">
                          <!-- small box -->
                          <div class="small-box bg-yellow">
                            <div class="inner">
                              <h3>Stok <br> Barang</h3>
                              <p>Melihat Stok Barang</p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-book"></i>
                            </div>
                            <a href="<?php echo site_url("C_barang");?>" class="small-box-footer">
                              Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                            </a>
                          </div>
                        </div>
                        <!-- /.Widget Stok Barang -->
                        <div class="col-lg-4 col-xs-4">
                          <!-- small box -->
                          <div class="small-box bg-aqua">
                            <div class="inner">
                              <h3>Penjualan <br> Barang</h3>
                              <p>Melakukan Penjualan Barang</p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-shopping-cart"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                              Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                            </a>
                          </div>
                        </div>
                        <!-- /.Widget Penjualan -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

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
