<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_loginuser');
    }

    public function index(){
        // halaman login, kalau sudah login, maka pindah ke halaman dashboard user
        if($this->session->userdata('login_user'))
            redirect('index');

        if(isset($_POST['login'])){
            $data['result'] = $this->M_loginuser->login();
            $this->load->view('user/v_login',$data);
        } else {
            $this->load->view('user/v_login');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('index');
    }

    public function registrasi()
    {  
        $this->load->view('user/v_register');
    }

    public function saveregistrasi()
    {
        $data = array(
                'nama'      => $this->input->post('nama'),
                'email'     => $this->input->post('email'),
                'password'  => $this->input->post('signup-password') 
                );
        $this->db->insert('pengguna',$data);
        redirect(base_url('login'));
    }
}