<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("akademik_model");
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('login'));
    }

    public function index()
    {
        $data["data_mahasiswa"] = $this->akademik_model->getAll();
        $this->load->view("akademik/list_mahasiswa", $data);
    }

    public function detail($NIM)
     {
            $data["mahasiswa"] = $this->akademik_model->detail($NIM);
        $this->load->view("akademik/detail_mahasiswa", $data);
     }
}