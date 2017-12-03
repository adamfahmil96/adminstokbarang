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
        <h2 style="margin-top:0px">Pembeli List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('c_pembeli_hrv/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('c_pembeli_hrv/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('c_pembeli_hrv'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Pembeli</th>
		<th>Nama Pembeli</th>
		<th>Alamat Pembeli</th>
		<th>Telp Pembeli</th>
		<th>Status Pembeli</th>
		<th>Flag Pembeli</th>
		<th>Action</th>
            </tr><?php
            foreach ($c_pembeli_hrv_data as $c_pembeli_hrv)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $c_pembeli_hrv->id_pembeli ?></td>
			<td><?php echo $c_pembeli_hrv->nama_pembeli ?></td>
			<td><?php echo $c_pembeli_hrv->alamat_pembeli ?></td>
			<td><?php echo $c_pembeli_hrv->telp_pembeli ?></td>
			<td><?php echo $c_pembeli_hrv->status_pembeli ?></td>
			<td><?php echo $c_pembeli_hrv->flag_pembeli ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('c_pembeli_hrv/read/'.$c_pembeli_hrv->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('c_pembeli_hrv/update/'.$c_pembeli_hrv->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('c_pembeli_hrv/delete/'.$c_pembeli_hrv->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('c_pembeli_hrv/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>