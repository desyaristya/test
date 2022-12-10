<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_profile');
	}

	public function index(){
		$data['mahasiswa'] = $this->m_profile->get_mahasiswa();
		$this->load->view('layout/header');
		$this->load->view('portfolio', $data);
		$this->load->view('layout/footer');
	}

	public function tampil_data($npm = null){
		$data_tampil['mahasiswa'] = $this->m_profile->get_mahasiswa_spec($npm);
		$this->load->view('layout/header');
		$this->load->view('portfolio', $data_tampil);
		$this->load->view('layout/header');
    }
}
