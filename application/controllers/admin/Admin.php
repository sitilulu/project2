<?php
class Admin extends CI_Controller{
    public function index(){
        $data['barang']=$this->ModelBarang->SData()->result_array();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/topbar');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
    }
}