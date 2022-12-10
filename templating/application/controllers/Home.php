<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_profile');
	}

	public function index(){
		$data['mahasiswa'] = $this->m_profile->get_mahasiswa();
		$this->load->view('layout/header');
		$this->load->view('home', $data);
		$this->load->view('layout/footer');
	}

    public function create_data()
    {
        if ($this->input->post()) {
            $data_mhs = $this->input->post();
            $this->m_profile->insert_data($data_mhs);
            redirect('Home');
        } else {
            $this->load->view('layout/header');
			$this->load->view('v_create');
			$this->load->view('layout/footer');
        }
    }

    public function update_data($npm = null)
    {
        if ($this->input->post()) {
            $data_mhs = $this->input->post();
            $this->m_profile->update_data($data_mhs);
            redirect('Home');
        } else {
            $data_update['mahasiswa'] = $this->m_profile->get_mahasiswa_spec($npm);
            $this->load->view('layout/header');
			$this->load->view('v_update', $data_update);
			$this->load->view('layout/footer');
        }
    }

    public function delete_data($npm)
    {
        $this->m_profile->delete_mahasiswa($npm);
        redirect('Home');
    }
}
