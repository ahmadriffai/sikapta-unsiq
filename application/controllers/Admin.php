<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __consrtruct(){
        parent::__consrtruct();

        is_login();

    }

    public function dashboard(){

    } 

    public function role(){

        $data['title'] = "User Akses";

        $data['roles'] = $this->db->get('role')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('template/footer');
    }

    public function roleAccess($role_id){

        $data['title'] = "User Akses";

        $data['role'] = $this->db->get_where('role', ['id' => $role_id])->row_array();

        $data['menus'] = $this->db->get_where('menu', ['id !=' => 1])->result_array();



        $this->load->view('template/header', $data);
        $this->load->view('admin/role-accsess', $data);
        $this->load->view('template/footer');
    }

    public function changeAccess(){
        $menuId = $this->input->post('menuId');
        $roleId = $this->input->post('roleId');

        $data = [
            'role_id' => $roleId,
            'menu_id' => $menuId
        ];

        $result = $this->db->get_where('menu_role', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('menu_role', $data);
        }else{
            $this->db->delete('menu_role', $data);
        }

        $this->session->set_flashdata('msg', 'Berhasil Ubah Akses User');
    }

}


