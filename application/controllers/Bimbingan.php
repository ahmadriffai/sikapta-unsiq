<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bimbingan extends CI_Controller {
    public function syaratTA(){

        $data['title'] = 'Syarat TA';

        $this->load->view('template/header', $data);
        $this->load->view('syarat/syaratTA');
        $this->load->view('template/footer');
    }
}