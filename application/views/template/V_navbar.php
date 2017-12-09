<header class="main-header">
  <!-- Logo -->
  <a class="logo" href="<?php echo site_url("C_index");?>"><i class="fa fa-paper-plane fa-fw"></i>
    <span>Toko Ambar</span>
  </a>
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
              <li>
                <a><i class="fa fa-user fa-fw"></i> Hai, <?php echo $nama; ?>!</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="<?php echo site_url("C_login/aksi_logout");?>"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
              </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- Control Sidebar Toggle Button -->
      </ul>
    </div>
  </nav>
</header>

<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">NAVIGASI UTAMA</li>
      <li class="treeview">
        <a href="<?php echo site_url("C_index");?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <!-- Barang -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-th-list"></i>
          <span>Barang</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
              <a href="<?php echo site_url("C_barang/create");?>"><i class="fa fa-circle-o"></i> Tambah Barang</a>
          </li>
          <li>
              <a href="<?php echo site_url("C_barang");?>"><i class="fa fa-circle-o"></i> Stok Barang</a>
          </li>
          <li>
              <a href="<?php echo site_url("C_jenis");?>"><i class="fa fa-circle-o"></i> Jenis Barang</a>
          </li>
          <li>
              <a href="<?php echo site_url("C_merk");?>"><i class="fa fa-circle-o"></i> Merk Barang</a>
          </li>
        </ul>
      </li>
      <!-- Penjualan -->
      <li>
        <a href="#"><i class="fa fa-shopping-cart fa-fw"></i>
          <span>Penjualan</span>
        </a>
      </li>
      <!-- Profil -->
      <li>
        <a href="<?php echo site_url('C_profil/update/'.$id); ?>"><i class="fa fa-user fa-fw"></i>
          <span>Profil</span>
        </a>
      </li>
      <!-- Keluar -->
      <li>
        <a href="<?php echo site_url("C_login/aksi_logout");?>"><i class="fa fa-sign-out fa-fw"></i>
          <span>Keluar</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
