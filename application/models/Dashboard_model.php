<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load library database di sini jika belum dimuat secara otomatis
    }

    // Contoh metode untuk mengambil data dari database
    public function get_data() {
        // Query untuk mengambil data dari database
        $query = $this->db->get('nama_tabel');

        // Mengembalikan hasil query dalam bentuk array
        return $query->result_array();
    }

}
