<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_barang_hrv');
        $this->load->model('M_jenis');
        $this->load->model('M_merk');
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
            $config['base_url'] = base_url() . 'C_barang?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'C_barang?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'C_barang';
            $config['first_url'] = base_url() . 'C_barang';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_barang_hrv->total_rows($q);
        $c_barang_hrv = $this->M_barang_hrv->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'c_barang_hrv_data' => $c_barang_hrv,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'nama' => $data['nama'],
            'id' => $data['id'],
        );
        $this->load->view('V_barang', $data);
      } else {
        redirect('C_login', 'refresh');
      }
    }

    public function read($id)
    {
        $row = $this->M_barang_hrv->get_by_id($id);
        if ($row) {
            $data = array(
              'id' => $row->id,
              'id_jenis' => $row->id_jenis,
              'id_merk' => $row->id_merk,
              'nama_barang' => $row->nama_barang,
              'jumlah_barang' => $row->jumlah_barang,
              'harga_barang' => $row->harga_barang,
              'waktu_tambah' => $row->waktu_tambah,
              'waktu_update' => $row->waktu_update,
              'flag_barang' => $row->flag_barang,
            );
            $this->load->view('c_barang_hrv/barang_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('c_barang_hrv'));
        }
    }

    public function create()
    {
      if($data = $this->cek_session()){
        $data_jenis = $this->M_jenis->showJenis();
        $data_merk = $this->M_merk->showMerk();
        $row_user = $this->M_users_hrv->get_by_id(1);
        $data = array(
            'data_jenis_hrv' => $data_jenis,
            'data_merk_hrv' => $data_merk,
            'button' => 'Create',
            'action' => site_url('C_barang/create_action'),
      	    'id' => set_value('id', $row_user->id),
      	    'id_barang' => set_value('id'),
      	    'id_jenis' => set_value('id_jenis'),
      	    'id_merk' => set_value('id_merk'),
      	    'nama_barang' => set_value('nama_barang'),
      	    'jumlah_barang' => set_value('jumlah_barang'),
      	    'harga_barang' => set_value('harga_barang'),
      	    'waktu_tambah' => set_value('waktu_tambah'),
      	    'waktu_update' => set_value('waktu_update'),
      	    'flag_barang' => set_value('flag_barang'),
            'nama' => $data['nama'],
      	);
        $this->load->view('V_barang_create', $data);
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
          		'id_merk' => $this->input->post('id_merk',TRUE),
          		'nama_barang' => $this->input->post('nama_barang',TRUE),
          		'jumlah_barang' => $this->input->post('jumlah_barang',TRUE),
          		'harga_barang' => $this->input->post('harga_barang',TRUE),
          		'waktu_tambah' => $this->input->post('waktu_tambah',TRUE),
          		'waktu_update' => $this->input->post('waktu_update',TRUE),
          		'flag_barang' => $this->input->post('flag_barang',TRUE),
      	    );
            $this->M_barang_hrv->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('C_barang'));
        }
    }

    public function update($id)
    {
      if($data = $this->cek_session()){
        $data_jenis = $this->M_jenis->showJenis();
        $data_merk = $this->M_merk->showMerk();
        $row = $this->M_barang_hrv->get_by_id($id);
        $row_user = $this->M_users_hrv->get_by_id(1);
        if ($row) {
            $data = array(
              'data_jenis_hrv' => $data_jenis,
              'data_merk_hrv' => $data_merk,
              'button' => 'Update',
              'action' => site_url('C_barang/update_action'),
              'id' => set_value('id', $row_user->id),
          		'id_barang' => set_value('id', $row->id),
          		'id_jenis' => set_value('id_jenis', $row->id_jenis),
          		'id_merk' => set_value('id_merk', $row->id_merk),
          		'nama_barang' => set_value('nama_barang', $row->nama_barang),
          		'jumlah_barang' => set_value('jumlah_barang', $row->jumlah_barang),
          		'harga_barang' => set_value('harga_barang', $row->harga_barang),
          		'waktu_tambah' => set_value('waktu_tambah', $row->waktu_tambah),
          		'waktu_update' => set_value('waktu_update', $row->waktu_update),
          		'flag_barang' => set_value('flag_barang', $row->flag_barang),
              'nama' => $data['nama'],
      	    );
            $this->load->view('V_barang_update', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('C_barang'));
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
          		'id_merk' => $this->input->post('id_merk',TRUE),
          		'nama_barang' => $this->input->post('nama_barang',TRUE),
          		'jumlah_barang' => $this->input->post('jumlah_barang',TRUE),
          		'harga_barang' => $this->input->post('harga_barang',TRUE),
          		'waktu_tambah' => $this->input->post('waktu_tambah',TRUE),
          		'waktu_update' => $this->input->post('waktu_update',TRUE),
          		'flag_barang' => $this->input->post('flag_barang',TRUE),
      	    );

            $this->M_barang_hrv->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('C_barang'));
        }
    }

    public function delete($id)
    {
        $row = $this->M_barang_hrv->get_by_id($id);

        if ($row) {
            $this->M_barang_hrv->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('C_barang'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('C_barang'));
        }
    }

    public function _rules()
    {
    	$this->form_validation->set_rules('id_jenis', 'id jenis', 'trim|required');
    	$this->form_validation->set_rules('id_merk', 'id merk', 'trim|required');
    	$this->form_validation->set_rules('nama_barang', 'nama barang', 'trim|required');
    	$this->form_validation->set_rules('jumlah_barang', 'jumlah barang', 'trim|required');
    	$this->form_validation->set_rules('harga_barang', 'harga barang', 'trim|required');
    	$this->form_validation->set_rules('waktu_tambah', 'waktu tambah', 'trim|required');
    	$this->form_validation->set_rules('waktu_update', 'waktu update', 'trim|required');
    	$this->form_validation->set_rules('flag_barang', 'flag barang', 'trim|required');

    	$this->form_validation->set_rules('id', 'id', 'trim');
    	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "Barang.xls";
        $judul = "Barang";
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
      	xlsWriteLabel($tablehead, $kolomhead++, "ID Merk");
      	xlsWriteLabel($tablehead, $kolomhead++, "Nama Barang");
      	xlsWriteLabel($tablehead, $kolomhead++, "Jumlah Barang");
      	xlsWriteLabel($tablehead, $kolomhead++, "Harga Barang");
      	xlsWriteLabel($tablehead, $kolomhead++, "Waktu Tambah");
      	xlsWriteLabel($tablehead, $kolomhead++, "Waktu Update");
      	xlsWriteLabel($tablehead, $kolomhead++, "Status");

	foreach ($this->M_barang_hrv->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
      	    xlsWriteLabel($tablebody, $kolombody++, $data->id_jenis);
      	    xlsWriteLabel($tablebody, $kolombody++, $data->id_merk);
      	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_barang);
      	    xlsWriteLabel($tablebody, $kolombody++, $data->jumlah_barang);
      	    xlsWriteNumber($tablebody, $kolombody++, $data->harga_barang);
      	    xlsWriteLabel($tablebody, $kolombody++, $data->waktu_tambah);
      	    xlsWriteLabel($tablebody, $kolombody++, $data->waktu_update);
      	    xlsWriteLabel($tablebody, $kolombody++, $data->flag_barang);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file C_barang_hrv.php */
/* Location: ./application/controllers/C_barang_hrv.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-06 05:37:51 */
/* http://harviacode.com */
