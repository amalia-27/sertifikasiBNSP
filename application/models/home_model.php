<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model {

    public function arsip($insert)
    {
        return $this->db->insert('arsip', $insert);
    }
    public function tampil_data_arsip(){
        $this->db->order_by('id_arsip', 'ASC');
        return $this->db->from('arsip')
        ->get()
        ->result();
    }
    public function tampil_surat($id)
    {
        return $this->db->get_where('arsip', ['id_arsip'=>$id])->row_array();
    }
    public function hapus($id){
        $this->db->where($id);
        $this->db->delete('arsip');
    }
    public function get($keyword){
        $this->db->select('*');
        $this->db->from('arsip');
        $this->db->like('kategori',$keyword);
        $this->db->or_like('judul',$keyword);
        return $this->db->get()->result();
    }
    public function about_me()
    {
        return $this->db->get('about')->result();
    }

}

/* End of file home_model.php */
