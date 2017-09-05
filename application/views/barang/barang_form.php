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
        <h2 style="margin-top:0px">Barang <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id Barang <?php echo form_error('id_barang') ?></label>
            <input type="text" class="form-control" name="id_barang" id="id_barang" placeholder="Id Barang" value="<?php echo $id_barang; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Jenis <?php echo form_error('id_jenis') ?></label>
            <input type="text" class="form-control" name="id_jenis" id="id_jenis" placeholder="Id Jenis" value="<?php echo $id_jenis; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Merk <?php echo form_error('id_merk') ?></label>
            <input type="text" class="form-control" name="id_merk" id="id_merk" placeholder="Id Merk" value="<?php echo $id_merk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Barang <?php echo form_error('nama_barang') ?></label>
            <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang" value="<?php echo $nama_barang; ?>" />
        </div>
	    <div class="form-group">
            <label for="bigint">Jumlah Barang <?php echo form_error('jumlah_barang') ?></label>
            <input type="text" class="form-control" name="jumlah_barang" id="jumlah_barang" placeholder="Jumlah Barang" value="<?php echo $jumlah_barang; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Harga Barang <?php echo form_error('harga_barang') ?></label>
            <input type="text" class="form-control" name="harga_barang" id="harga_barang" placeholder="Harga Barang" value="<?php echo $harga_barang; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Waktu Tambah <?php echo form_error('waktu_tambah') ?></label>
            <input type="text" class="form-control" name="waktu_tambah" id="waktu_tambah" placeholder="Waktu Tambah" value="<?php echo $waktu_tambah; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Waktu Update <?php echo form_error('waktu_update') ?></label>
            <input type="text" class="form-control" name="waktu_update" id="waktu_update" placeholder="Waktu Update" value="<?php echo $waktu_update; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">Flag Barang <?php echo form_error('flag_barang') ?></label>
            <input type="text" class="form-control" name="flag_barang" id="flag_barang" placeholder="Flag Barang" value="<?php echo $flag_barang; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('barang') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>