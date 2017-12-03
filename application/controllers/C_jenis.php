<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_jenis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_jenis_hrv');
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
            $config['base_url'] = base_url() . 'C_jenis?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'C_jenis?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'C_jenis';
            $config['first_url'] = base_url() . 'C_jenis';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_jenis_hrv->total_rows($q);
        $c_jenis_hrv = $this->M_jenis_hrv->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'c_jenis_hrv_data' => $c_jenis_hrv,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'nama' => $data['nama'],
            'id' => $data['id'],
        );
        $this->load->view('V_jenis', $data);
  		} else{
        redirect('C_login', 'refresh');
      }
    }

    public function read($id)
    {
        $row = $this->M_jenis_hrv->get_by_id($id);
        if ($row) {
            $data = array(
          		'id' => $row->id,
          		'id_jenis' => $row->id_jenis,
          		'jenis' => $row->jenis,
          		'flag_jenis' => $row->flag_jenis,
              'nama' => $data['nama'],
      	    );
            $this->load->view('c_jenis_hrv/jenis_barang_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('c_jenis_hrv'));
        }
    }

    public function create()
    {
      if($data = $this->cek_session()){
        $row_user = $this->M_users_hrv->get_by_id(1);
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('C_jenis/create_action'),
      	    'id' => set_value('id', $row_user->id),
      	    'id_jenis_barang' => set_value('id'),
      	    'id_jenis' => set_value('id_jenis'),
      	    'jenis' => set_value('jenis'),
      	    'flag_jenis' => set_value('flag_jenis'),
            'nama' => $data['nama'],
      	);
        $this->load->view('V_jenis_create', $data);
      }
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
          		'id_jenis' => $this->input->post('id_jenis',TRUE),
          		'jenis' => $this->input->post('jenis',TRUE),
          		'flag_jenis' => $this->input->post('flag_jenis',TRUE),
      	    );

            $this->M_jenis_hrv->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('C_jenis'));
        }
    }

    public function update($id)
    {
      if($data = $this->cek_session()){
        $row = $this->M_jenis_hrv->get_by_id($id);
        $row_user = $this->M_users_hrv->get_by_id(1);
        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'action' => site_url('C_jenis/update_action'),
            		'id' => set_value('id', $row_user->id),
            		'id_jenis_barang' => set_value('id', $row->id),
            		'id_jenis' => set_value('id_jenis', $row->id_jenis),
            		'jenis' => set_value('jenis', $row->jenis),
            		'flag_jenis' => set_value('flag_jenis', $row->flag_jenis),
                'nama' => $data['nama'],
      	    );
            $this->load->view('V_jenis_update', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('C_jenis'));
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
          		'id_jenis' => $this->input->post('id_jenis',TRUE),
          		'jenis' => $this->input->post('jenis',TRUE),
      	    );

            $this->M_jenis_hrv->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('C_jenis'));
        }
    }

    public function delete($id)
    {
        $row = $this->M_jenis_hrv->get_by_id($id);

        if ($row) {
            $this->M_jenis_hrv->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('C_jenis'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('C_jenis'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('id_jenis', 'id jenis', 'trim|required');
	$this->form_validation->set_rules('jenis', 'jenis', 'trim|required');
	$this->form_validation->set_rules('flag_jenis', 'flag jenis', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "Jenis_Barang.xls";
        $judul = "Jenis Barang";
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
      	xlsWriteLabel($tablehead, $kolomhead++, "ID Jenis");
      	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Barang");
      	xlsWriteLabel($tablehead, $kolomhead++, "Status");

	foreach ($this->M_jenis_hrv->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
      	    xlsWriteLabel($tablebody, $kolombody++, $data->id_jenis);
      	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis);
      	    xlsWriteLabel($tablebody, $kolombody++, $data->flag_jenis);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file C_jenis_hrv.php */
/* Location: ./application/controllers/C_jenis_hrv.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-06 05:39:33 */
/* http://harviacode.com */
