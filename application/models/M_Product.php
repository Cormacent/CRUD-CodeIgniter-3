<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_product extends CI_Model
{
    // ambil data keseluruhan
    public function getDataProduct()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $query = $this->db->get();
        return $query->result();
    }

    // tambah data
    public function inputDataProduct($data){
        $this->db->insert('produk',$data);
    }

    // ubah data
    public function editDataProduct($data,$id){
        $this->db->where('id',$id);
        $this->db->update('produk',$data);
    }

    // tampil 1 data
    public function getDetailDataProduct($id){
        $this->db->where('id',$id);
        $query = $this->db->get('produk');
        return $query->row();
    }

    // hapus 1 data
    public function deleteDataProduct($id){
        $this->db->where('id',$id);
        $this->db->delete('produk');
    }
}
