<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Barang Read</h2>
        <table class="table">
	    <tr><td>Id Jenis</td><td><?php echo $id_jenis; ?></td></tr>
	    <tr><td>Id Merk</td><td><?php echo $id_merk; ?></td></tr>
	    <tr><td>Nama Barang</td><td><?php echo $nama_barang; ?></td></tr>
	    <tr><td>Jumlah Barang</td><td><?php echo $jumlah_barang; ?></td></tr>
	    <tr><td>Harga Barang</td><td><?php echo $harga_barang; ?></td></tr>
	    <tr><td>Waktu Tambah</td><td><?php echo $waktu_tambah; ?></td></tr>
	    <tr><td>Waktu Update</td><td><?php echo $waktu_update; ?></td></tr>
	    <tr><td>Flag Barang</td><td><?php echo $flag_barang; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('c_barang_hrv') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>
