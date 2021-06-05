<?php

class RiwayatTransaksiModel extends CI_model{

    public function joinRiwayatUser($username){
        $this->db->select('username, tgl_transaksi, jumlah_dana');
        $this->db->from('riwayat_transaksi');
        $this->db->join('user', 'riwayat_transaksi.nik=user.nik', 'inner');
        $this->db->where('username',$username);
        return $this->db->get()->result();
    }
}

?>