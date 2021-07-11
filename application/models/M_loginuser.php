<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_loginuser extends CI_Model {

    function login(){

        try {
            $email = $this->input->post('email', true);
            $password = $this->input->post('password', true);         
            $result = $this->db->get_where('pengguna',array(
                                'email' => $email,
                                'password' => $password
                                ))->row();  

            if($result){
                $this->session->set_userdata('login_user',true);
                $this->session->set_userdata('email_user',$result->email);
                $this->session->set_userdata('nama_user',$result->nama);
                $this->session->set_userdata('id_user',$result->id);
                $this->session->set_userdata('alamat',$result->alamat);
                $this->session->set_userdata('telp',$result->telp);
                $this->session->set_userdata('tempat_lahir',$result->tempat_lahir);
                $this->session->set_userdata('jenis_kelamin',$result->jenis_kelamin);
                // $this->session->set_userdata('gambar',$result->gambar);
                $this->session->set_userdata('theme','sb_admin');

                redirect('index');
            } else {
                return "Maaf, Email atau Password Anda Salah !";
            }

        } catch(Exception $e){
            return $e->getMessage();
        }
    }
}