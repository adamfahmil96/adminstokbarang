<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   *  Model untuk Login
   */
  class M_merk extends CI_Model
  {
    public function showMerk(){
      $this -> db -> select('*');
      $this -> db -> from('merk_barang');
      $this -> db -> where('flag_merk', 0);
      return $this->db->get()->result();
    }

    public function countMerk(){
      $this -> db -> select('*');
      $this -> db -> from('merk_barang');
      $this -> db -> where('flag_merk', 0);
      return $this->db->count_all_results();
    }

  }

 ?>
