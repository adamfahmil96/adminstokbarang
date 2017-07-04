<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   *  Model untuk Login
   */
  class M_login extends CI_Model
  {
    // public function cek_login($table,$where){
    //   return $this->db->get_where($table,$where);
    // }
    public function cek_login($username,$password){
      $this -> db -> select('*');
      $this -> db -> from('users');
      $this -> db -> where('username', $username);
      $this -> db -> where('password', MD5($password));
      $this -> db -> limit(1);

      $query = $this -> db -> get();

      if($query -> num_rows() == 1){
        return $query->result();
      } else {
        return false;
      }
    }
  }

 ?>
