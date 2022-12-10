<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('Templates');
		$this->load->model('m_profile');
	}

	public function index(){
		$data['mahasiswa'] = $this->m_profile->get_mahasiswa();
		$this->templates->display_user('home', $data);
	}

	public function user_portfolio($npm = null){
		$data_tampil['mahasiswa'] = $this->m_profile->get_mahasiswa_spec($npm);
		$this->templates->display_user('portfolio', $data_tampil);
	}

    public function create_data()
    {
        if ($this->input->post()) {
            $data_mhs = $this->input->post();
            $this->m_profile->insert_data($data_mhs);
            redirect('Mahasiswa');
        } else {
            $this->templates->display_user('v_create');
        }
    }

    public function update_data($npm = null)
    {
        if ($this->input->post()) {
            $data_mhs = $this->input->post();
            $this->m_profile->update_data($data_mhs);
            redirect('Mahasiswa');
        } else {
            $data_update['mahasiswa'] = $this->m_profile->get_mahasiswa_spec($npm);
            $this->templates->display_user('v_update', $data_update);
        }
    }

    public function delete_data($npm)
    {
        $this->m_profile->delete_mahasiswa($npm);
        redirect('Mahasiswa');
    }
}
