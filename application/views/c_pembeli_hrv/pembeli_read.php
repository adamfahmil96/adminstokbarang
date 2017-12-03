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
        <h2 style="margin-top:0px">Pembeli Read</h2>
        <table class="table">
	    <tr><td>Id Pembeli</td><td><?php echo $id_pembeli; ?></td></tr>
	    <tr><td>Nama Pembeli</td><td><?php echo $nama_pembeli; ?></td></tr>
	    <tr><td>Alamat Pembeli</td><td><?php echo $alamat_pembeli; ?></td></tr>
	    <tr><td>Telp Pembeli</td><td><?php echo $telp_pembeli; ?></td></tr>
	    <tr><td>Status Pembeli</td><td><?php echo $status_pembeli; ?></td></tr>
	    <tr><td>Flag Pembeli</td><td><?php echo $flag_pembeli; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('c_pembeli_hrv') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>