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
        <h2 style="margin-top:0px">Merk_barang Read</h2>
        <table class="table">
	    <tr><td>Id Merk</td><td><?php echo $id_merk; ?></td></tr>
	    <tr><td>Merk</td><td><?php echo $merk; ?></td></tr>
	    <tr><td>Flag Merk</td><td><?php echo $flag_merk; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('c_merk_hrv') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>