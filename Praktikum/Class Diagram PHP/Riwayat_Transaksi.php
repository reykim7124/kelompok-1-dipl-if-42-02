<?php
    class RiwayatTransaksi {
        private $id_riwayat;
        private $jumlah_dana;
        private $tgl_transaksi;
 
        public function _construct($id_riwayat, $jumlah_dana, $tgl_transaksi) {
            $this->id_riwayat = $id_riwayat; 
            $this->jumlah_dana = $jumlah_dana;
            $this->tgl_transaksi = $tgl_transaksi;
        }
 
        public function SetIdRiwayat($id_riwayat) {
            $this->id_riwayat = $id_riwayat;
        }
 
        public function SetJumlahDana($jumlah_dana) {
            $this->jumlah_dana = $jumlah_dana
        }
 
        public function SetTglTransaksi($tgl_transaksi) {
            $this->tgl_transaksi = $tgl_transaksi;
        }
 
        public function GetIdRiwayat() {
            return $this->id_riwayat;
        }
 
        public function GetJumlahDana() {
           	return $this->jumlah_dana;
        }
 
        public function GetTglTransaksi() {
            return $this->tgl_transaksi;
        }
    }
?>
