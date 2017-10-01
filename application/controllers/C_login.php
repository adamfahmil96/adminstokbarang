<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   *  Controller untuk login
   */
  class C_login extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
      $this->load->model('M_login');
    }

    public function index(){
      if($this->session->userdata('logged_in')){
        redirect('C_index','refresh');
  		} else{
        $this->load->view('V_login');
      }
    }

    public function aksi_login(){
      $username = $this->input->post('username');
    	$password = $this->input->post('password');
    	$result = $this->M_login->cek_login($username,$password);
    	if($result){
        $data_session = array();
        foreach ($result as $row) {
          $data_session = array(
            'id' => $row->id,
      			'nama' => $row->name,
      			'username' => $row->username
      		);
          $this->session->set_userdata('logged_in',$data_session);
        }
    		redirect('C_index');
    	}else{
    		echo "Username atau password salah !";
    	}
    }

    public function aksi_logout(){
      $this->session->unset_userdata('logged_in');
  		$this->session->sess_destroy();
  		redirect('C_login','refresh');
  	}
  }

 ?>
