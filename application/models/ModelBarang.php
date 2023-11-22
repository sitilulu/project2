<?php
class ModelBarang extends CI_Model{

    public function SData(){
      return $this->db->get('tb_barang');
    }
}