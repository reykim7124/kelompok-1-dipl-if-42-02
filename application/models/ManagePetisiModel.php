<?php
class ManagePetisiModel extends CI_model {
    public function getAllPetisi($username) {
        $this->db->select('*');
        if ($this->session->userdata('role') == 'user') {
            $this->db->from('melihat');
            $this->db->join('halaman_petisi','melihat.id_petisi = halaman_petisi.id_petisi','LEFT');
        } else {
            $this->db->from('manage');
            $this->db->join('halaman_petisi','manage.id_petisi = halaman_petisi.id_petisi','LEFT');
        }
        $this->db->where('username', $username);
        return $this->db->get()->result_array();
    }

    public function deletePetisi($id) {
        $this->db->where('id_petisi',$id);
        return $this->db->delete('halaman_petisi');
    }

    public function editPetisi($id, $data) {
        $this->db->where('id_petisi',$id);
        return $this->db->update('halaman_petisi',$data);
    }
}
?>