<?php
/**
 * @property AdminModel $AdminModel
 * @property input $input
 */
    class Admin extends CI_Controller{
        public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
    }
    public function index()
{
    $tanggal = $this->input->get('tanggal');
    if ($tanggal) {
        $data['admin'] = $this->AdminModel->TampilTanggal($tanggal);
    } else {
        $data['admin'] = $this->AdminModel->Tampil();
    }
    $this->load->view('home/databuku', $data);
}

    public function hapus($id) 
    {
        $this->AdminModel->hapusData($id);
        redirect('admin'); 
    }
    public function update($id) 
    {
        $data = $this->AdminModel->Ambildata();   
        $this->AdminModel->updateData($id, $data);
        redirect('admin'); 
    }
    
    }
?>