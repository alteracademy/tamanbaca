<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       if(!$this->session->userdata('login_user'))
            redirect('login');
    }

    public function index($id)
    {
        $this->db->where('id',$id);
        $data['akun'] = $this->db->get('pengguna')->row();
        $this->load->view('user/v_profile',$data);
    }

    public function ubah_profile($id)
    {
        $this->db->where('id',$id);
        $data['akun'] = $this->db->get('pengguna')->row();
        $this->load->view('user/v_ubah_profile',$data);
    }

    public function save_profile()
    {
        $id_user = $this->input->post('id_user');
        $data = array(
                'nama'              => $this->input->post('nama'),
                'email'             => $this->input->post('email'),
                'alamat'            => $this->input->post('alamat'),
                'telp'            => $this->input->post('telp'),
                'tempat_lahir'      => $this->input->post('tempat_lahir'),
                'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
                'jenis_kelamin'     => $this->input->post('jenis_kelamin') 
                );
        $this->db->where('id',$id_user);
        $this->db->update('pengguna',$data);
        redirect(base_url('akun/index/'.$id_user));
    }

    public function posting()
    {
        $data['kategori'] = $this->db->get('kategori');

        

        $this->load->view('user/v_posting',$data);
    }

    public function save_posting()
    {
        $id_user = $this->input->post('id_user');

        

        $config['upload_path']          = 'assets/uploads/files/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['encrypt_name']         = TRUE;
        
        //Initialize
        // $this->upload->initialize($config);
        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file'))
        {
                $error = array('error' => $this->upload->display_errors());
                // print_r($error);
                // die();

        } 
        // print_r($this->upload->data());
        // die();
        // $gambar = array('upload_data' => $this->upload->data());
        $gambar = $this->upload->data();
        $filename = $gambar['file_name'];
        
        $data = array(
                'karangan'          => $id_user,
                'kategori'          => $this->input->post('kategori'),
                'judul'             => $this->input->post('judul'),
                'isi'               => $this->input->post('isi'),
                'gambar'            => $filename,
                'created_at'        => date('Y-m-d h:i:s') 
                );
        $this->db->insert('cerita',$data);
        redirect(base_url('index'));
    }

}