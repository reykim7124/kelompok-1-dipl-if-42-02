<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanPetisiModel extends CI_Model {
    public function detailPetisi($id){
        $this->db->where('id_petisi', $id);
        return $this->db->get('halaman_petisi')->row();
    }

    public function updatePetisi($id, $data) {
        $this->db->set('dana_terkumpul', $data);
        $this->db->where('id_petisi', $id);
        $this->db->update('halaman_petisi');
    }

    public function insertRiwayatTransaksi($data) {
        $this->db->insert('riwayat_transaksi', $data);
    }

    public function insertCek($id) {
        $id_riwayat = $this->db->select("id_riwayat")->limit(1)->order_by('id_riwayat',"DESC")->get("riwayat_transaksi")->row()->id_riwayat;
        $this->db->insert('cek', array('id_riwayat' => $id_riwayat, 'id_petisi' => $id));
    }
}

?>