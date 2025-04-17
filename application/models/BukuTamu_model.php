<?php
class BukuTamu_model extends CI_Model {

    public function simpan() {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'instansi' => $this->input->post('instansi', true),
            'keperluan' => $this->input->post('keperluan', true),
            'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan', true),
    );
    
    $this->db->insert('buku_tamu', $data);
    }
    
}
