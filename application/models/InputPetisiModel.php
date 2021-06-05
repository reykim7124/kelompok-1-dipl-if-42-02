<?php
class InputPetisiModel extends CI_model{	
    public function addPetisiHalamanPetisi($data){
        return $this->db->insert('halaman_petisi',$data);
    }

    public function addPetisiMelihat($data){
        return $this->db->insert('melihat',$data);
    }

    public function getLastIdPetisi(){
        return $this->db->select("id_petisi")->limit(1)->order_by('id_petisi',"DESC")->get("halaman_petisi")->row()->id_petisi + 1;
    }

    public function getPetisiById($id) {
        return $this->db->select()->where('id_petisi', $id)->get("halaman_petisi")->row();
    }
}
?>