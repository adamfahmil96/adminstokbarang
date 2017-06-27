<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   *  Model untuk Login
   */
  class M_login extends CI_Model
  {
    public function cek_login($table,$where){
      return $this->db->get_where($table,$where);
    }
  }

 ?>
