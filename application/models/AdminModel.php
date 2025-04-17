<?php
    class AdminModel extends CI_Model{
        public function Tampil() {
            $tanggal = $this->input->get('tanggal');
            if ($tanggal) {
                $this->db->where('tanggal_kunjungan', $tanggal);
            }
            return $this->db->get('buku_tamu')->result_array();
        }
        
    
        public function hapusData($id) {
            $this->db->where('id', $id);
            $this->db->delete('buku_tamu');
        }
    
        public function Ambildata() {
            return [
                'nama'             => $this->input->post('nama'),
                'instansi'         => $this->input->post('instansi'),
                'keperluan'        => $this->input->post('keperluan'),
                'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
            ];
        }
        
        public function updateData($id, $data) {
            $this->db->where('id', $id);
            $this->db->update('buku_tamu', $data);
     
        }
        public function TampilTanggal($tanggal) {
            $this->db->where('tanggal_kunjungan', $tanggal);
            return $this->db->get('buku_tamu')->result_array();
        }
        
    }
    
?>