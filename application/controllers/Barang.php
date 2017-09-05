<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'barang/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'barang/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'barang/index.html';
            $config['first_url'] = base_url() . 'barang/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Barang_model->total_rows($q);
        $barang = $this->Barang_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'barang_data' => $barang,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('barang/barang_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Barang_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_barang' => $row->id_barang,
		'id_jenis' => $row->id_jenis,
		'id_merk' => $row->id_merk,
		'nama_barang' => $row->nama_barang,
		'jumlah_barang' => $row->jumlah_barang,
		'harga_barang' => $row->harga_barang,
		'waktu_tambah' => $row->waktu_tambah,
		'waktu_update' => $row->waktu_update,
		'flag_barang' => $row->flag_barang,
	    );
            $this->load->view('barang/barang_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('barang/create_action'),
	    'id' => set_value('id'),
	    'id_barang' => set_value('id_barang'),
	    'id_jenis' => set_value('id_jenis'),
	    'id_merk' => set_value('id_merk'),
	    'nama_barang' => set_value('nama_barang'),
	    'jumlah_barang' => set_value('jumlah_barang'),
	    'harga_barang' => set_value('harga_barang'),
	    'waktu_tambah' => set_value('waktu_tambah'),
	    'waktu_update' => set_value('waktu_update'),
	    'flag_barang' => set_value('flag_barang'),
	);
        $this->load->view('barang/barang_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_barang' => $this->input->post('id_barang',TRUE),
		'id_jenis' => $this->input->post('id_jenis',TRUE),
		'id_merk' => $this->input->post('id_merk',TRUE),
		'nama_barang' => $this->input->post('nama_barang',TRUE),
		'jumlah_barang' => $this->input->post('jumlah_barang',TRUE),
		'harga_barang' => $this->input->post('harga_barang',TRUE),
		'waktu_tambah' => $this->input->post('waktu_tambah',TRUE),
		'waktu_update' => $this->input->post('waktu_update',TRUE),
		'flag_barang' => $this->input->post('flag_barang',TRUE),
	    );

            $this->Barang_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('barang'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Barang_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('barang/update_action'),
		'id' => set_value('id', $row->id),
		'id_barang' => set_value('id_barang', $row->id_barang),
		'id_jenis' => set_value('id_jenis', $row->id_jenis),
		'id_merk' => set_value('id_merk', $row->id_merk),
		'nama_barang' => set_value('nama_barang', $row->nama_barang),
		'jumlah_barang' => set_value('jumlah_barang', $row->jumlah_barang),
		'harga_barang' => set_value('harga_barang', $row->harga_barang),
		'waktu_tambah' => set_value('waktu_tambah', $row->waktu_tambah),
		'waktu_update' => set_value('waktu_update', $row->waktu_update),
		'flag_barang' => set_value('flag_barang', $row->flag_barang),
	    );
            $this->load->view('barang/barang_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_barang' => $this->input->post('id_barang',TRUE),
		'id_jenis' => $this->input->post('id_jenis',TRUE),
		'id_merk' => $this->input->post('id_merk',TRUE),
		'nama_barang' => $this->input->post('nama_barang',TRUE),
		'jumlah_barang' => $this->input->post('jumlah_barang',TRUE),
		'harga_barang' => $this->input->post('harga_barang',TRUE),
		'waktu_tambah' => $this->input->post('waktu_tambah',TRUE),
		'waktu_update' => $this->input->post('waktu_update',TRUE),
		'flag_barang' => $this->input->post('flag_barang',TRUE),
	    );

            $this->Barang_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Barang_model->get_by_id($id);

        if ($row) {
            $this->Barang_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('barang'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_barang', 'id barang', 'trim|required');
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
        $namaFile = "barang.xls";
        $judul = "barang";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Barang");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jenis");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Merk");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Barang");
	xlsWriteLabel($tablehead, $kolomhead++, "Jumlah Barang");
	xlsWriteLabel($tablehead, $kolomhead++, "Harga Barang");
	xlsWriteLabel($tablehead, $kolomhead++, "Waktu Tambah");
	xlsWriteLabel($tablehead, $kolomhead++, "Waktu Update");
	xlsWriteLabel($tablehead, $kolomhead++, "Flag Barang");

	foreach ($this->Barang_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_barang);
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

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-05 15:33:02 */
/* http://harviacode.com */