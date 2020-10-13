<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_product extends CI_Model
{
    public function getDataProduct()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $query = $this->db->get();
        return $query->result();
    }
    public function inputDataProduct($data){
        $this->db->insert('produk',$data);
    }
}
