<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function index(){
        $nim = $this->session->userdata('nim');
        $mahasiswa = $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();

        $this->load->view('template/header');
        $this->load->view('user/index');
        $this->load->view('template/footer');
    }

}