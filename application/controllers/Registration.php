<?php
    class Registration extends CI_Controller {
            public function index () 
                {
                    $this->load->view('registration');
                }
        
            public function tambah_aksi(){
                $nama_lengkap    = $this->input->post('nama_lengkap');
                $username        = $this->input->post('username');
                $password        = $this->input->post('password');
                $hak_akses       = $this->input->post('hak_akses');

                $data = array(
                    'nama_lengkap'      => $nama_lengkap,
                    'username'          => $username,
                    'password'          => $password,
                    'hak_akses'         => $hak_akses
                );

                $this->m_registration->input_data($data,'hak_akses');
                    $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <strong>Selamat !! <br> </strong> Data Member Berhasil Di - TAMBAHKAN
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect ('login/index');
            }
        }
?>