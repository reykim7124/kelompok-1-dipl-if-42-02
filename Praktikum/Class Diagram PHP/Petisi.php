<?php
    class Petisi {
        private $id_petisi;
        private $judul_petisi;
        private $tgl_post;
        private $kebutuhan_dana;
        private $dana_terkumpul;
        private $deskripsi;
        private $durasi_hari;
 
        public function _construct($id_petisi, $judul_petisi, $tgl_post, $kebutuhan_dana, $dana_terkumpul, $deskripsi, $durasi_hari) {
            $this->id_petisi = $id_petisi; 
            $this->judul_petisi = $judul_petisi;
            $this->tgl_post = $tgl_post;
            $this->kebutuhan_dana = $kebutuhan_dana;
            $this->dana_terkumpul = $dana_terkumpul;
            $this->deskripsi = $deskripsi;
            $this->durasi_hari = $durasi_hari;
        }
 
        public function SetIdPetisi($id_petisi) {
            $this->id_petisi = $id_petisi;
        }
 
        public function SetJudulPetisi($judul_petisi) {
            $this->judul_petisi = $judul_petisi
        }
 
        public function SetTglPost($tgl_post) {
            $this->tgl_post = $tgl_post;
        }
 
        public function SetDeskripsi($deskripsi) {
            $this->deskripsi = $deskripsi;
        }
 
        public function SetDurasi($durasi_hari) {
            $this->durasi_hari = $durasi_hari;
        }
 
        public function SetDanaTerkumpul($dana_terkumpul) {
            $this->dana_terkumpul = $dana_terkumpul;
        }
 
        public function GetIdPetisi() {
            return $this->id_petisi;
        }
 
        public function GetJudulPetisi() {
            return $this->judul_petisi;
        }
 
        public function GetTglPost() {
            return $this->tgl_post;
        }
 
        public function GetKebutuhanDana() {
            return $this->kebutuhan_dana;
        }
 
        public function GetDeskripsi() {
            return $this->deskripsi;
        }
 
        public function GetDurasiHari() {
            return $this->durasi_hari;
        }
    }
?>
