<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_pembeli extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pembeli_hrv');
        $this->load->model('M_users_hrv');
        $this->load->library('form_validation');
    }

    private function cek_session(){
      if($this->session->userdata('logged_in')){
        $session_data = $this->session->userdata('logged_in');
        $data['nama'] = $session_data['nama'];
        $data['id'] = $session_data['id'];
        return $data;
      } else {
        return FALSE;
      }
    }

    public function index()
    {
      if($data = $this->cek_session()){
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'C_pembeli?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'C_pembeli?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'C_pembeli';
            $config['first_url'] = base_url() . 'C_pembeli';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_pembeli_hrv->total_rows($q);
        $c_pembeli_hrv = $this->M_pembeli_hrv->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'c_pembeli_hrv_data' => $c_pembeli_hrv,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'nama' => $data['nama'],
            'id' => $data['id'],
        );
        $this->load->view('V_pembeli', $data);
      } else {
        redirect('C_login', 'refresh');
      }
    }

    public function read($id)
    {
      if($data = $this->cek_session()){
        $row = $this->M_pembeli_hrv->get_by_id($id);
        if ($row) {
            $data = array(
          		'id' => $row->id,
          		'id_pembeli' => $row->id_pembeli,
          		'nama_pembeli' => $row->nama_pembeli,
          		'alamat_pembeli' => $row->alamat_pembeli,
          		'telp_pembeli' => $row->telp_pembeli,
          		'status_pembeli' => $row->status_pembeli,
          		'flag_pembeli' => $row->flag_pembeli,
              'nama' => $data['nama'],
      	    );
            $this->load->view('c_pembeli_hrv/pembeli_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('C_pembeli'));
        }
      }
    }

    public function create()
    {
      if($data = $this->cek_session()){
        $row_user = $this->M_users_hrv->get_by_id(1);
        $data = array(
          'button' => 'Tambah',
          'action' => site_url('C_pembeli/create_action'),
    	    'id' => set_value('id', $row_user->id),
    	    'id_pembeli_barang' => set_value('id'),
    	    'id_pembeli' => set_value('id_pembeli'),
    	    'nama_pembeli' => set_value('nama_pembeli'),
    	    'alamat_pembeli' => set_value('alamat_pembeli'),
    	    'telp_pembeli' => set_value('telp_pembeli'),
    	    'status_pembeli' => set_value('status_pembeli'),
    	    'flag_pembeli' => set_value('flag_pembeli'),
          'nama' => $data['nama'],
      	);
        $this->load->view('V_pembeli_create', $data);
      }
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
          		'id_pembeli' => $this->input->post('id_pembeli',TRUE),
          		'nama_pembeli' => $this->input->post('nama_pembeli',TRUE),
          		'alamat_pembeli' => $this->input->post('alamat_pembeli',TRUE),
          		'telp_pembeli' => $this->input->post('telp_pembeli',TRUE),
          		'status_pembeli' => $this->input->post('status_pembeli',TRUE),
          		'flag_pembeli' => $this->input->post('flag_pembeli',TRUE),
      	    );
            $this->M_pembeli_hrv->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('C_pembeli'));
        }
    }

    public function update($id)
    {
      if($data = $this->cek_session()){
        $row = $this->M_pembeli_hrv->get_by_id($id);
        $row_user = $this->M_users_hrv->get_by_id(1);
        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'action' => site_url('C_pembeli/update_action'),
            		'id' => set_value('id', $row->id),
            		'id_pembeli_barang' => set_value('id', $row->id),
            		'id_pembeli' => set_value('id_pembeli', $row->id_pembeli),
            		'nama_pembeli' => set_value('nama_pembeli', $row->nama_pembeli),
            		'alamat_pembeli' => set_value('alamat_pembeli', $row->alamat_pembeli),
            		'telp_pembeli' => set_value('telp_pembeli', $row->telp_pembeli),
            		'status_pembeli' => set_value('status_pembeli', $row->status_pembeli),
            		'flag_pembeli' => set_value('flag_pembeli', $row->flag_pembeli),
                'nama' => $data['nama'],
        	    );
            $this->load->view('V_pembeli_update', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('C_pembeli'));
        }
      }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
          		'id_pembeli' => $this->input->post('id_pembeli',TRUE),
          		'nama_pembeli' => $this->input->post('nama_pembeli',TRUE),
          		'alamat_pembeli' => $this->input->post('alamat_pembeli',TRUE),
          		'telp_pembeli' => $this->input->post('telp_pembeli',TRUE),
          		'status_pembeli' => $this->input->post('status_pembeli',TRUE),
          		'flag_pembeli' => $this->input->post('flag_pembeli',TRUE),
      	    );
            $this->M_pembeli_hrv->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('C_pembeli'));
        }
    }

    public function delete($id)
    {
        $row = $this->M_pembeli_hrv->get_by_id($id);

        if ($row) {
            $this->M_pembeli_hrv->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('C_pembeli'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('C_pembeli'));
        }
    }

    public function _rules()
    {
    	$this->form_validation->set_rules('id_pembeli', 'id pembeli', 'trim|required');
    	$this->form_validation->set_rules('nama_pembeli', 'nama pembeli', 'trim|required');
    	$this->form_validation->set_rules('alamat_pembeli', 'alamat pembeli', 'trim|required');
    	$this->form_validation->set_rules('telp_pembeli', 'telp pembeli', 'trim|required');
    	$this->form_validation->set_rules('status_pembeli', 'status pembeli', 'trim|required');
    	$this->form_validation->set_rules('flag_pembeli', 'flag pembeli', 'trim|required');
    	$this->form_validation->set_rules('id', 'id', 'trim');
    	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "pembeli.xls";
        $judul = "pembeli";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
      	xlsWriteLabel($tablehead, $kolomhead++, "ID Pembeli");
      	xlsWriteLabel($tablehead, $kolomhead++, "Nama Pembeli");
      	xlsWriteLabel($tablehead, $kolomhead++, "Alamat Pembeli");
      	xlsWriteLabel($tablehead, $kolomhead++, "Telp Pembeli");
      	xlsWriteLabel($tablehead, $kolomhead++, "Status Pembeli");
      	xlsWriteLabel($tablehead, $kolomhead++, "Status");

      	foreach ($this->M_pembeli_hrv->get_all() as $data) {
          $kolombody = 0;

          //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
          xlsWriteNumber($tablebody, $kolombody++, $nourut);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->id_pembeli);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_pembeli);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat_pembeli);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->telp_pembeli);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->status_pembeli);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->flag_pembeli);

    	    $tablebody++;
          $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file C_pembeli_hrv.php */
/* Location: ./application/controllers/C_pembeli_hrv.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-12-02 15:18:00 */
/* http://harviacode.com */
