<?php

class RiwayatTransaksiModel extends CI_model{

    public function joinRiwayatUser($username){
        $this->db->select('halaman_petisi.judul_petisi, riwayat_transaksi.tgl_transaksi, riwayat_transaksi.jumlah_dana');
        $this->db->from('riwayat_transaksi');
        $this->db->join('user', 'riwayat_transaksi.username = user.username', 'inner');
        $this->db->join('cek', 'riwayat_transaksi.id_riwayat = cek.id_riwayat', 'inner');
        $this->db->join('halaman_petisi', 'cek.id_petisi = halaman_petisi.id_petisi', 'inner');
        $this->db->where('riwayat_transaksi.username', $username);
        return $this->db->get()->result_array();
    }
}

?>