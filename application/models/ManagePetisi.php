<?php

class ManageAkun extends CI_model{
	
    public function getAllPetisi(){
        return $this->db->get('halaman_petisi')->result();
    }

    public function deletePetisi(){
        $id = $this->input->post('id_petisi');
        $this->db->where('id_petisi',$id);
        return $this->db->delete('halaman_petisi');
    }

    public function editPetisi(){
        $id = $this->input->post('id_petisi');
        $data = array(
            'judul_petisi' => $this->input->post('judul_petisi'),
            'tgl_post' => $this->input->post('tgl_post'),
            'kebutuhan_dana' => $this->input->post('kebutuhan_dana'),
            'dana_terkumpul' => $this->input->post('dana_terkumpul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'durasi' => $this->input->post('durasi')
        );
     

        $this->db->where('id_petisi',$id);
        return $this->db->update('halaman_petisi',$data);
    }
?>