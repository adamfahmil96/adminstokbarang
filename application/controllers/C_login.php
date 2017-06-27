<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   *  Controller untuk login
   */
  class C_login extends CI_Controller
  {
    public function index(){
      $this->load->view('login');
    }
  }

 ?>
