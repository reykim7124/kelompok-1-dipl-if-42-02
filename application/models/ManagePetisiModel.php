<?php

class ManagePetisiModel extends CI_model{
	

    public funtion joinHalamanMelihat(){
        $this->db->select('*');
        $this->db->from('melihat');
        $this->db->join('halaman_petisi','melihat.id_petisi = halaman_petisi.id_petisi','LEFT');      
        $query = $this->db->get();
        return $query;
    }
    public function getAllPetisi($username){
        $this->db->where('username',$username);
        return $this->db->get(joinHalamanMelihat())->result();
    }

    public function deletePetisi($id){
        $this->db->where('id_petisi',$id);
        return $this->db->delete('halaman_petisi');
    }

    public function editPetisi($id, $data){
        $this->db->where('id_petisi',$id);
        return $this->db->update('halaman_petisi',$data);
    }
}
?>