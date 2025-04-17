<?php

/**
 * @property BukuTamu_model $BukuTamu_model
 * @property form_validation $form_validation
 * @property session $session
 */

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BukuTamu_model');
        $this->load->library('form_validation');

    }


    public function index()
    {
        $data['title'] = 'Buku Tamu';
        $this->load->view('home/index',$data);
        
        
    }
    public function tambah() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('tanggal_kunjungan', 'Tanggal Kunjungan', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('validation_errors', validation_errors());
            redirect('home');
        } else {
            $this->BukuTamu_model->simpan();
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            redirect('home');
        }
    }
    
    
    
    
    

}
