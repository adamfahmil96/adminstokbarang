<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   *
   */
  class C_jenis extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('M_jenis');
    }

    public function index(){
      if($this->session->userdata('logged_in')){
        $session_data = $this->session->userdata('logged_in');
        $data['nama'] = $session_data['nama'];
        $this->load->view('V_jenis', $data);
  		} else{
        redirect('C_login', 'refresh');
      }
    }

    public function getJenis(){
      $hasil = $this->M_jenis->showJenis();
      return print_r(json_encode($hasil, true));
      // $this->datatables->select('*');
      // $this->datatables->from('jenis_barang');
      // $this->datatables->where('flag_jenis', 0);
      // return print_r($this->datatables->generate());
    }
  }

 ?>
