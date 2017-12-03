<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_merk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_merk_hrv');
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
            $config['base_url'] = base_url() . 'C_merk?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'C_merk?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'C_merk';
            $config['first_url'] = base_url() . 'C_merk';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_merk_hrv->total_rows($q);
        $c_merk_hrv = $this->M_merk_hrv->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'c_merk_hrv_data' => $c_merk_hrv,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'nama' => $data['nama'],
            'id' => $data['id'],
        );
        $this->load->view('V_merk', $data);
      } else{
        redirect('C_login', 'refresh');
      }
    }

    public function read($id)
    {
        $row = $this->M_merk_hrv->get_by_id($id);
        if ($row) {
            $data = array(
          		'id' => $row->id,
          		'id_merk' => $row->id_merk,
          		'merk' => $row->merk,
          		'flag_merk' => $row->flag_merk,
              'nama' => $data['nama'],
      	    );
            $this->load->view('c_merk_hrv/merk_barang_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('c_merk_hrv'));
        }
    }

    public function create()
    {
      if($data = $this->cek_session()){
        $row_user = $this->M_users_hrv->get_by_id(1);
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('C_merk/create_action'),
      	    'id' => set_value('id', $row_user->id),
      	    'id_merk_barang' => set_value('id'),
      	    'id_merk' => set_value('id_merk'),
      	    'merk' => set_value('merk'),
      	    'flag_merk' => set_value('flag_merk'),
            'nama' => $data['nama'],
      	);
        $this->load->view('V_merk_create', $data);
      }
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
          		'id_merk' => $this->input->post('id_merk',TRUE),
          		'merk' => $this->input->post('merk',TRUE),
          		'flag_merk' => $this->input->post('flag_merk',TRUE),
      	    );

            $this->M_merk_hrv->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('C_merk'));
        }
    }

    public function update($id)
    {
      if($data = $this->cek_session()){
        $row = $this->M_merk_hrv->get_by_id($id);
        $row_user = $this->M_users_hrv->get_by_id(1);
        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'action' => site_url('C_merk/update_action'),
                'id' => set_value('id', $row_user->id),
            		'id_merk_barang' => set_value('id', $row->id),
            		'id_merk' => set_value('id_merk', $row->id_merk),
            		'merk' => set_value('merk', $row->merk),
            		'flag_merk' => set_value('flag_merk', $row->flag_merk),
                'nama' => $data['nama'],
      	    );
            $this->load->view('V_merk_update', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('C_merk'));
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
          		'id_merk' => $this->input->post('id_merk',TRUE),
          		'merk' => $this->input->post('merk',TRUE),
          		'flag_merk' => $this->input->post('flag_merk',TRUE),
      	    );

            $this->M_merk_hrv->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('C_merk'));
        }
    }

    public function delete($id)
    {
        $row = $this->M_merk_hrv->get_by_id($id);

        if ($row) {
            $this->M_merk_hrv->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('C_merk'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('C_merk'));
        }
    }

    public function _rules()
    {
    	$this->form_validation->set_rules('id_merk', 'id merk', 'trim|required');
    	$this->form_validation->set_rules('merk', 'merk', 'trim|required');
    	$this->form_validation->set_rules('flag_merk', 'flag merk', 'trim|required');

    	$this->form_validation->set_rules('id', 'id', 'trim');
    	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "Merk_Barang.xls";
        $judul = "Merk Barang";
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
      	xlsWriteLabel($tablehead, $kolomhead++, "ID Merk");
      	xlsWriteLabel($tablehead, $kolomhead++, "Merk Barang");
      	xlsWriteLabel($tablehead, $kolomhead++, "Status");

      	foreach ($this->M_merk_hrv->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
      	    xlsWriteLabel($tablebody, $kolombody++, $data->id_merk);
      	    xlsWriteLabel($tablebody, $kolombody++, $data->merk);
      	    xlsWriteLabel($tablebody, $kolombody++, $data->flag_merk);

  	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file C_merk_hrv.php */
/* Location: ./application/controllers/C_merk_hrv.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-06 05:40:19 */
/* http://harviacode.com */
