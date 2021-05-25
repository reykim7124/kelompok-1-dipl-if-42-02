<?php

class ManagePetisiModel extends CI_model{
	
    public function getAllPetisi(){
        return $this->db->get('halaman_petisi')->result();
    }

    public function deletePetisi(){
        $this->db->where('id_petisi',$id);
        return $this->db->delete('halaman_petisi');
    }

    public function editPetisi($id, $data){
        $this->db->where('id_petisi',$id);
        return $this->db->update('halaman_petisi',$data);
    }
}
?>