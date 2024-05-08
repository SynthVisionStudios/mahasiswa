<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->input->post()){
            if($this->user_model->doLogin()){
                if($this->session->userdata('user_akademik') == 1){
                    redirect(site_url('dashboard2'));
                }else{
                    redirect(site_url('dashboard'));
                }
                
            } 
                
        }
        // tampilkan halaman login
            $this->load->view("login_page");
    }

    
    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}