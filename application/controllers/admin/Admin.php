<?php
class Admin extends CI_Controller{
    public function index(){
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/topbar');
        $this->load->view('admin/footer');
    }
}