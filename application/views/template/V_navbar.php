<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url("C_index");?>"><i class="fa fa-paper-plane fa-fw"></i> Program Stok Barang</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
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
              <a href="<?php echo site_url("C_login/aksi_logout");?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
          </ul>
          <!-- /.dropdown-user -->
      </li>
      <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Cari...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="<?php echo site_url("C_index");?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-th-list fa-fw"></i> Barang<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo site_url("C_barang/create");?>"><i class="fa fa-plus fa-fw"></i> Tambah Barang</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("C_barang");?>"><i class="fa fa-book fa-fw"></i> Stok Barang</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("C_jenis");?>"><i class="fa fa-tag fa-fw"></i> Jenis Barang</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("C_merk");?>"><i class="fa fa-tags fa-fw"></i> Merk Barang</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Penjualan</a>
                </li>
                <li>
                    <a href="<?php echo site_url('C_profil/update/'.$id); ?>"><i class="fa fa-user fa-fw"></i> Profil</a>
                </li>
                <li>
                    <a href="<?php echo site_url("C_login/aksi_logout");?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
