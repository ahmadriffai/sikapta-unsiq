<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        if ($this   ->session->userdata('nim')){
            redirect('menu');
        }
        $this->form_validation->set_rules('nim', 'nim' ,'required|trim');
        $this->form_validation->set_rules('password', 'Password' ,'required|trim');


        if($this->form_validation->run() == false){
            $this->load->view('template/header-auth');
            $this->load->view('auth/login');
            $this->load->view('template/footer-auth');
        }else{
            $this->_login();
        }
    }

    private function _login(){
        $nim = $this->input->post('nim');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['nim' => $nim])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        "nim" => $user['nim'],
                        "role_id" => $user['role_id']
                    ];

                    $this->session->set_userdata($data);

                    $role = $this->db->get_where('role', ['id' => $user['role_id']])->row_array();

                    // var_dump($role['id']);die;

                    if ($role['id'] == 2) {
                        redirect('bimbingan/syaratTA');
                    }else{
                        redirect('menu');
                    }

                }else{
                    $this->session->set_flashdata('msg',
                    '<div class="alert alert-danger" role="alert">
                    Password anda salah
                    </div>');
                    redirect('auth');
                }

            }else{
                $this->session->set_flashdata('msg',
                '<div class="alert alert-danger" role="alert">
                Email belum diaktivasi
                </div>');
                redirect('auth');
            }

        }else{
            $this->session->set_flashdata('msg',
            '<div class="alert alert-danger" role="alert">
            Anda belum terdaftar dalam SIKAPTA
            </div>');
            redirect('auth');
        }


    }

    public function register()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim',[
            'required' => "Email tidak boleh kosong"
        ]);
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|min_length[3]|matches[password1]');

        
        if( $this->form_validation->run() == false ){
            $this->load->view('template/header-auth');
            $this->load->view('auth/register');
            $this->load->view('template/footer-auth');      
        }else{

            $nim = $this->input->post('nim');

            $nimMahasiswa = $this->db->get_where('mahasiswa', ['nim'=> $nim])->row_array()['nim'];
            $nimUser = $this->db->get_where('user', ['nim'=> $nim])->row_array()['nim'];

            if ($nimUser == $nim) {
                $this->session->set_flashdata('msg', 
                '<div class="alert alert-danger" role="alert">
                Nomer Induk Mahasiswa Sudah terdafar Silahkan Login
                </div>'
                );
                redirect('auth/register');
                return false;
            }

            if ($nimMahasiswa !== $nim) {
                $this->session->set_flashdata('msg',
                '<div class="alert alert-danger" role="alert">
                Nomer Induk Mahasiswa tidak terdafar dalam database kami
                </div>');
                redirect('auth/register');
                return false;
            }

            $data = [
                'nim' => $nim,
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('msg',
            '<div class="alert alert-success" role="alert">
            Akun SIKAPTA anda sudah berhasil dibuat , silahkah check email untuk activasi akun
            </div>');
            redirect('auth');

        }
    }

    public function logout(){
        $this->session->unset_userdata('nim');
        $this->session->unset_userdata('role_id');
        redirect('auth');
    }

    public function block(){
        $this->load->view('template/header-auth');
        $this->load->view('auth/blocked');
        $this->load->view('template/footer-auth');
    }
    
}