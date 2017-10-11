<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
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
            $config['base_url'] = base_url() . 'C_profil?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'C_profil?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'C_profil';
            $config['first_url'] = base_url() . 'C_profil';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_users_hrv->total_rows($q);
        $c_users_hrv = $this->M_users_hrv->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'c_users_hrv_data' => $c_users_hrv,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'nama' => $data['nama'],
            'id' => $data['id'],
        );
        $this->load->view('V_profil', $data);
      } else {
        redirect('C_login', 'refresh');
      }
    }

    public function read($id)
    {
        $row = $this->M_users_hrv->get_by_id($id);
        if ($row) {
            $data = array(
          		'id' => $row->id,
          		'name' => $row->name,
          		'username' => $row->username,
          		'password' => $row->password,
          		'email' => $row->email,
      	    );
            $this->load->view('c_users_hrv/users_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('c_users_hrv'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('C_profil/create_action'),
      	    'id' => set_value('id'),
      	    'name' => set_value('name'),
      	    'username' => set_value('username'),
      	    'password' => set_value('password'),
      	    'email' => set_value('email'),
      	);
        $this->load->view('c_users_hrv/users_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
          		'name' => $this->input->post('name',TRUE),
          		'username' => $this->input->post('username',TRUE),
          		'password' => $this->input->post('password',TRUE),
          		'email' => $this->input->post('email',TRUE),
      	    );

            $this->M_users_hrv->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('C_profil'));
        }
    }

    public function update($id)
    {
      if($data = $this->cek_session()){
        $row = $this->M_users_hrv->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('C_profil/update_action'),
            		'id' => set_value('id', $row->id),
            		'name' => set_value('name', $row->name),
            		'username' => set_value('username', $row->username),
            		'password' => set_value('password', $row->password),
            		'email' => set_value('email', $row->email),
                'nama' => $data['nama'],
      	    );
            $this->load->view('V_profil', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('C_profil'));
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
            		'name' => $this->input->post('name',TRUE),
            		'username' => $this->input->post('username',TRUE),
            		'password' => $this->input->post('password',TRUE),
            		'email' => $this->input->post('email',TRUE),
        	    );

            $this->M_users_hrv->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('C_profil'));
        }
    }

    public function delete($id)
    {
        $row = $this->M_users_hrv->get_by_id($id);

        if ($row) {
            $this->M_users_hrv->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('C_profil'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('C_profil'));
        }
    }

    public function _rules()
    {
    	$this->form_validation->set_rules('name', 'name', 'trim|required');
    	$this->form_validation->set_rules('username', 'username', 'trim|required');
    	$this->form_validation->set_rules('password', 'password', 'trim|required');
    	$this->form_validation->set_rules('email', 'email', 'trim|required');

    	$this->form_validation->set_rules('id', 'id', 'trim');
    	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file C_users_hrv.php */
/* Location: ./application/controllers/C_users_hrv.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-10 01:13:14 */
/* http://harviacode.com */
