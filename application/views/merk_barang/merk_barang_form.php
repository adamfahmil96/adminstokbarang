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
        <h2 style="margin-top:0px">Merk_barang <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id Merk <?php echo form_error('id_merk') ?></label>
            <input type="text" class="form-control" name="id_merk" id="id_merk" placeholder="Id Merk" value="<?php echo $id_merk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Merk <?php echo form_error('merk') ?></label>
            <input type="text" class="form-control" name="merk" id="merk" placeholder="Merk" value="<?php echo $merk; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">Flag Merk <?php echo form_error('flag_merk') ?></label>
            <input type="text" class="form-control" name="flag_merk" id="flag_merk" placeholder="Flag Merk" value="<?php echo $flag_merk; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('merk_barang') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>