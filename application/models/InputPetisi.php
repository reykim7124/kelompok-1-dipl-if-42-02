<?php

class InputPetisi extends CI_model{
	
    public function addPetisi(){
        $data = array(
            'judul_petisi' => $this->input->post('judul_petisi'),
            'tgl_post' => $this->input->post('tgl_post'),
            'kebutuhan_dana' => $this->input->post('kebutuhan_dana'),
            'dana_terkumpul' => $this->input->post('dana_terkumpul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'durasi' => $this->input->post('durasi')
        );
        return $this->db->insert('halaman_petisi',$data);
        }
        
?>