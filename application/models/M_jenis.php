<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   *  Model untuk Login
   */
  class M_jenis extends CI_Model
  {
    public function showJenis(){
      $this -> db -> select('*');
      $this -> db -> from('jenis_barang');
      $this -> db -> where('flag_jenis', 0);
      return $this->db->get()->result_array();
    }

    public function countJenis(){
      $this -> db -> select('*');
      $this -> db -> from('jenis_barang');
      $this -> db -> where('flag_jenis', 0);
      return $this->db->count_all_results();
    }

  }

 ?>
