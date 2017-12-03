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
        <h2 style="margin-top:0px">Pembeli <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id Pembeli <?php echo form_error('id_pembeli') ?></label>
            <input type="text" class="form-control" name="id_pembeli" id="id_pembeli" placeholder="Id Pembeli" value="<?php echo $id_pembeli; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Pembeli <?php echo form_error('nama_pembeli') ?></label>
            <input type="text" class="form-control" name="nama_pembeli" id="nama_pembeli" placeholder="Nama Pembeli" value="<?php echo $nama_pembeli; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat Pembeli <?php echo form_error('alamat_pembeli') ?></label>
            <input type="text" class="form-control" name="alamat_pembeli" id="alamat_pembeli" placeholder="Alamat Pembeli" value="<?php echo $alamat_pembeli; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Telp Pembeli <?php echo form_error('telp_pembeli') ?></label>
            <input type="text" class="form-control" name="telp_pembeli" id="telp_pembeli" placeholder="Telp Pembeli" value="<?php echo $telp_pembeli; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Status Pembeli <?php echo form_error('status_pembeli') ?></label>
            <input type="text" class="form-control" name="status_pembeli" id="status_pembeli" placeholder="Status Pembeli" value="<?php echo $status_pembeli; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">Flag Pembeli <?php echo form_error('flag_pembeli') ?></label>
            <input type="text" class="form-control" name="flag_pembeli" id="flag_pembeli" placeholder="Flag Pembeli" value="<?php echo $flag_pembeli; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('c_pembeli_hrv') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>