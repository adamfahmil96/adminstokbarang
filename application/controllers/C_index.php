<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   *
   */
  class C_index extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->helper('url');
      $this->load->library('session');
      if($this->session->userdata('status') != "login"){
  			redirect('C_login');
        // echo "Ini harusnya ke Login";
        // var_dump($this->session->userdata('status'));
  		}
    }

    public function index(){
      $this->load->view('V_index');
    }
  }

 ?>
