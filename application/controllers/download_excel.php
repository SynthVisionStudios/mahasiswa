<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'third_party/PHPExcel/Classes/PHPExcel.php'; // Sesuaikan dengan lokasi library PHPExcel

class download_excel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model
        $this->load->model('nama_model');
        // Load library PHPExcel
        $this->load->library('PHPExcel');
    }

    public function index() {
        // Panggil model untuk mengambil data mahasiswa
        $data['mhs_fakultas'] = $this->nama_model->get_data_mahasiswa();
        // Load view
        $this->load->view('fakultas/index', $data);
    }

    public function download_excel() {
        // Panggil model untuk mengambil data mahasiswa
        $data_mahasiswa = $this->nama_model->get_data_mahasiswa();

        // Create new PHPExcel object
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        $worksheet = $objPHPExcel->getActiveSheet();

        // Set header
        $worksheet->setCellValue('A1', 'No');
        $worksheet->setCellValue('B1', 'NIM');
        $worksheet->setCellValue('C1', 'Nama Mahasiswa');
        $worksheet->setCellValue('D1', 'Program Studi');

        // Set data
        $no = 1;
        $row = 2;
        foreach ($data_mahasiswa as $mahasiswa) {
            $worksheet->setCellValue('A' . $row, $no++);
            $worksheet->setCellValue('B' . $row, $mahasiswa->NIM);
            $worksheet->setCellValue('C' . $row, $mahasiswa->nama_mhs);
            $worksheet->setCellValue('D' . $row, $mahasiswa->nama_prodi);
            $row++;
        }

        // Set filename
        $filename = 'data_mahasiswa.xlsx';

        // Set header untuk menghasilkan file Excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        // Save file Excel ke output
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
    }
}
