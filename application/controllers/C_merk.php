<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   *
   */
  class C_merk extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
    }

    public function index(){
      if($this->session->userdata('logged_in')){
        $session_data = $this->session->userdata('logged_in');
        $data['nama'] = $session_data['nama'];
        $this->load->view('V_merk', $data);
  		} else{
        redirect('C_login', 'refresh');
      }
    }
  }

 ?>
