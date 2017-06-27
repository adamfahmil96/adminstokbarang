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
      $this->load->helper('url');
      $this->load->database();
      $this->load->library('session');
      $this->load->model('M_login');
      // if($this->session->userdata('status') == "login"){
  		// 	redirect('C_index');
        // echo "Harusnya ini ke Index gan!";
        // var_dump($this->session->userdata('status'));
  		// }
    }

    public function index(){
      $this->load->view('V_login');
    }

    public function aksi_login(){
      $username = $this->input->post('username');
    	$password = $this->input->post('password');
    	$where = array(
    		'username' => $username,
    		'password' => md5($password)
    		);
    	$cek = $this->M_login->cek_login("users",$where)->num_rows();
    	if($cek > 0){
    		$data_session = array(
    			'nama' => $username,
    			'status' => "login"
    			);
    		$this->session->set_userdata($data_session);
    		redirect('C_index');
    	}else{
    		echo "Username dan password salah !";
    	}
    }

    public function aksi_logout(){
      $data_session = array('nama' => '', 'status' => '');
      $this->session->unset_userdata($data_session);
  		$this->session->sess_destroy();
  		redirect('C_login');
  	}
  }

 ?>
