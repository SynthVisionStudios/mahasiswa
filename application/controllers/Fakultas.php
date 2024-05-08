<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fakultas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("fakultas_model");
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('login'));
    }

    public function index()
    {
        $data["mhs_fakultas"] = $this->fakultas_model->getAllFakultas($this->session->userdata('id_fakultas'));
        $data["nama_fakultas"] = $this->fakultas_model->getNamaFakultas($this->session->userdata('id_fakultas'));
        $data["prodi"] = $this->fakultas_model->getProdi($this->session->userdata('id_fakultas'));
        // $data["tahun"] = $this->pemasukkan_lain_model->getTahunPemasukkanLain();
        $this->load->view("fakultas/list_mahasiswa_fakultas", $data);
    }

    public function detail($NIM)
     {
        $data["prodi"] = $this->fakultas_model->getProdi($this->session->userdata('id_fakultas'));
        $data["mahasiswa"] = $this->fakultas_model->detail($NIM);
        $this->load->view("fakultas/detail_mahasiswa_fakultas", $data);
     }

    public function delete($NIM=null)
    {
        if (!isset($NIM)) show_404();
        if ($this->fakultas_model->delete($NIM)) 
        {
            redirect(site_url('fakultas'));
        }
    }

    public function add()
     {
        $post = $this->input->post();
        $NIM = $post["NIM"];
        if($this->fakultas_model->cekNIM($NIM) == 0){
            if ($this->fakultas_model->saveMahasiswa()) 
            {
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }
        }else{$this->session->set_flashdata('Gagal', 'NIM sudah digunakan');
        }
        redirect(site_url('fakultas'));
     }

    public function edit($id_mahasiswa)
     {
         $post = $this->input->post();
        if ($this->fakultas_model->editMahasiswa($id_mahasiswa)) 
            {
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }
        else{$this->session->set_flashdata('Gagal', 'NIM sudah digunakan');
        }
        redirect(site_url('fakultas'));
     }
}