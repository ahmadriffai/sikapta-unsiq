<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct(){
        parent::__construct();
        
        is_login();
    }


    public function index(){

        $data['title'] = "Menu Management";
        $data['menus'] = $this->db->get('menu')->result_array();

        $this->load->model('Menu_model', 'menu');
        $data['subMenus'] = $this->menu->getSubMenu();

        $this->form_validation->set_rules('menu', 'menu', 'required');

        if ($this->form_validation->run() == false) {     
            $this->load->view('template/header', $data);
            $this->load->view('menu/index-menu.php', $data);
            $this->load->view('menu/insert-menu.php', $data);
            $this->load->view('menu/get-submenu.php', $data);
            $this->load->view('menu/insert-submenu.php', $data);
            $this->load->view('template/footer');
        }else{
            $this->insertMenu();
        }


    }

    public function insertMenu(){
        $data = [
            'menu' => $this->input->post('menu'),
        ];

        $this->db->insert('menu',$data);

        $this->session->set_flashdata('msg', 'Berhasil Menambahkan Menu');
        redirect('menu');
    }
    
    public function insertSubMenu(){
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('url', 'url', 'required');
        $this->form_validation->set_rules('menu_id', 'menu_id', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');
        $this->form_validation->set_rules('is_active', 'is_active', 'required');
        
        if ($this->form_validation->run() == false) {  
            $this->session->set_flashdata('msg-danger', 'Gagal Menambahkan Data, Field Tidak Boleh Kosong');
            redirect('menu');
        }else{
            $data = [
                'menu_id' => $this->input->post('menu_id'),
                'title' => $this->input->post('title'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('title'),
            ];

            $this->db->insert('sub_menu',$data);

            $this->session->set_flashdata('msg', 'Berhasil Menambahkan Sub Menu');
            redirect('menu');
        }

    }



}