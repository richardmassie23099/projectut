<?php
    class Login extends CI_Controller {
        public function index () 
            {
                $this->load->view('login');
            }

        function __construct()
        {
            parent ::__construct() ;
            $this->load->model('m_hak_akses') ;
        }

        function validasi ()
        {
            $username = $this->input->post('username') ;
            $password = $this->input->post('password') ;

            if ($this->m_hak_akses->CheckUser($username, $password) == true) {

                $row = $this->m_hak_akses->get_all_by_username($username) ;
                $data_user = array(
                    'username' => $username,
                    'nama_lengkap' => $row->nama_lengkap,
                    'hak_akses' => $row->hak_akses,
                    'is_login' => true,
                ) ;
                $this->session->set_userdata($data_user) ;
                redirect('adm') ;
                exit ;
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show swalDefaultError" role="alert">
                <strong><center>Maaf !!<br> </strong> Username / Password SALAH</center></div>');
                redirect('login') ;
            }
        }

        function logout()
        {
            $this->session->sess_destroy() ;
            redirect('dashboard') ;
        }
        

    }

?>
