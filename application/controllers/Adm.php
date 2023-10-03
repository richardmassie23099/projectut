<?php

class Adm extends CI_Controller {

    public function __construct()
            {
                parent::__construct() ;
                if ($this->session->userdata('is_login') != true) {
                    redirect('dashboard') ;
                }
                $this->load->model('m_karyawan') ;
            }

    public function index () 
        {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('adm-view');
            $this->load->view('templates/footer');
        }

}

?>
