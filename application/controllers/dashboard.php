<?php

class Dashboard extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->data['aktif'] = 'dashboard';
		$this->load->model('Akademik_model', 'Akademik_model');
		$this->load->model('Fakultas_model', 'Fakultas_model');
		$this->load->model('User_model', 'User_model');
	}

	public function index(){
		$this->data['title'] = 'Halaman Utama';
		$this->load->view('dashboard', $this->data);
	}
}