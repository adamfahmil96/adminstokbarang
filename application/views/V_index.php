<?php
  // echo "Berhasil login";
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Login</title>
   </head>
   <body>
     <h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
     <br>
     <a href="<?php echo site_url('C_login/aksi_logout'); ?>">Logout</a>
   </body>
 </html>
