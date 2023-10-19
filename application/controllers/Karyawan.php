<?php
    class Karyawan extends CI_Controller
        {

            
            public function __construct()
            {
                parent::__construct() ;

                if ($this->session->userdata('is_login') != true) {
                    redirect('login') ;
                }

                $this->load->model('m_karyawan') ;
            }

            public function index()
            {
                if ($this->input->post('submit')) {
                    $data ['keyword'] = $this->input->post('keyword') ;
                    $this->session->set_userdata('keyword', $data['keyword']) ;
                } else {
                    $data['keyword'] = $this->session->userdata('keyword') ;
                }
                
                $config['base_url']     = 'http://localhost/bbm_ut/karyawan/index' ;
                $this->db->like('nrp', $data['keyword']) ;
                $this->db->or_like('nama_kry', $data['keyword']) ;
                $this->db->or_like('company', $data['keyword']) ;
                $this->db->or_like('lokasi', $data['keyword']) ;
                $this->db->or_like('departement', $data['keyword']) ;
                $this->db->or_like('posisi', $data['keyword']) ;
                $this->db->or_like('tempat_lahir', $data['keyword']) ;
                $this->db->or_like('tgl_lahir', $data['keyword']) ;
                $this->db->or_like('status', $data['keyword']) ;
                $this->db->or_like('jumlah_anak', $data['keyword']) ;
                $this->db->or_like('tgl_bekerja', $data['keyword']) ;
                $this->db->from('tb_karyawan') ;
                $config['total_rows']   = $this->db->count_all_results() ;
                $data['total_rows'] = $config['total_rows'] ;
                $config['per_page']     = 20 ;

                
                // Styling
                $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">' ;
                $config['full_tag_close']   = '</ul></nav></div>' ;

                $config['first_link']   = 'First' ;
                $config['first_tag_open']   = '<li class="page-item"><span class="page-link">' ;
                $config['first_tag_close']  = '</li></span>' ;

                $config['last_link']    = 'Last' ;
                $config['last_tag_open']   = '<li class="page-item"><span class="page-link">' ;
                $config['last_tag_close']  = '</li></span>' ;

                $config['next_link']    = '&raquo' ;
                $config['next_tag_open']    = '<li class="page-item"><span class="page-link">' ;
                $config['next_tag_close']   = '<span aria-hidden="true"></span></span></li>' ;

                $config['prev_link']    = '&laquo' ;
                $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">' ;
                $config['prev_tag_close']   = '</li></span>' ;

                $config['cur_tag_open']     = '<li class="page-item active "><span class="page-link">' ;
                $config['cur_tag_close']    = '</li><span>' ;

                $config['num_tag_open']     = '<li class="page-item"><span class="page-link">' ;
                $config['num_tag_close']    = '</li></span>' ;

                // Initialize
                $this->pagination->initialize($config) ;

                $data['start'] = $this->uri->segment(3) ;
                $data['karyawan'] = $this->m_karyawan->get_data($config["per_page"], $data['start'], $data['keyword']) ;

                $this->load->view('adm/templates/header');
                $this->load->view('adm/templates/sidebar');
                $this->load->view('karyawan', $data);
                $this->load->view('adm/templates/footer');

            }
            public function tambah_aksi(){
                $nrp           = $this->input->post('nrp');
                $nama_kry      = $this->input->post('nama_kry');
                $company       = $this->input->post('company');
                $departement   = $this->input->post('departement');
                $posisi        = $this->input->post('posisi');
                $lokasi        = $this->input->post('lokasi');
                $tempat_lahir  = $this->input->post('tempat_lahir');
                $tgl_lahir     = $this->input->post('tgl_lahir');
                $status        = $this->input->post('status');
                $jumlah_anak   = $this->input->post('jumlah_anak');
                $tgl_bekerja   = $this->input->post('tgl_bekerja');

                $data = array(
                    'nrp'           => $nrp,
                    'nama_kry'      => $nama_kry,
                    'company'       => $company,
                    'departement'   => $departement,
                    'posisi'        => $posisi,
                    'lokasi'        => $lokasi,
                    'tempat_lahir'  => $tempat_lahir,
                    'tgl_lahir'     => $tgl_lahir,
                    'status'        => $status,
                    'jumlah_anak'   => $jumlah_anak,
                    'tgl_bekerja'   => $tgl_bekerja
                );

                $this->m_karyawan->input_data($data,'tb_karyawan');
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Selamat !! </strong> Data Karyawan Berhasil Ditambahkan
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect ('karyawan/index');
            }

            public function hapus($id)
                {
                    $where = array ('id' => $id) ;
                    $this->m_karyawan->hapus_data($where, 'tb_karyawan') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Karyawan Berhasil Dihapus
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect ('karyawan/index') ;
                }

            public function edit_karyawan($id)
                {
                    $where = array ('id' => $id) ;
                    $data['karyawan'] = $this->m_karyawan->edit_data($where, 'tb_karyawan')->result() ;

                    $this->load->view('adm/templates/header');
                    $this->load->view('adm/templates/sidebar');
                    $this->load->view('adm/edit/edit_karyawan', $data);
                    $this->load->view('adm/templates/footer');
                }

            public function update()
                {
                    $id            = $this->input->post('id');
                    $nrp           = $this->input->post('nrp');
                    $nama_kry      = $this->input->post('nama_kry');
                    $company       = $this->input->post('company');
                    $departement   = $this->input->post('departement');
                    $posisi        = $this->input->post('posisi');
                    $lokasi        = $this->input->post('lokasi');
                    $tempat_lahir  = $this->input->post('tempat_lahir');
                    $tgl_lahir     = $this->input->post('tgl_lahir');
                    $status        = $this->input->post('status');               
                    $jumlah_anak   = $this->input->post('jumlah_anak');               
                    $tgl_bekerja   = $this->input->post('tgl_bekerja');               
                    
                    $data = array (
                        'nrp'           => $nrp,
                        'nama_kry'      => $nama_kry,
                        'company'       => $company,
                        'departement'   => $departement,
                        'posisi'        => $posisi,
                        'lokasi'        => $lokasi,
                        'tempat_lahir'  => $tempat_lahir,
                        'tgl_lahir'     => $tgl_lahir,
                        'status'        => $status,
                        'jumlah_anak'   => $jumlah_anak,
                        'tgl_bekerja'   => $tgl_bekerja
                    ) ;

                    $where = array (
                        'id' => $id 
                    ) ;
                    
                    $this->m_karyawan->update_data($where, $data, 'tb_karyawan') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Karyawan Berhasil Diperbaharui
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('karyawan/index') ;
                }
            
            public function detail_karyawan($id)
                {
                    $this->load->model('m_karyawan') ;
                    $detail = $this->m_karyawan->detail_data($id) ;
                    $data['detail_karyawan'] = $detail ;

                    $this->load->view('adm/templates/header');
                    $this->load->view('adm/templates/sidebar');
                    $this->load->view('adm/detail/detail_karyawan', $data);
                    $this->load->view('adm/templates/footer');
                }

            public function print_karyawan()
                {
                    $data['karyawan'] = $this->m_karyawan->tampil_data('tb_karyawan')->result() ;
                    $this->load->view('adm/print/print_karyawan', $data);
                }

            public function search()
                {
                    $keyword = $this->input->post('keyword') ;
                    $data['karyawan']=$this->m_karyawan->get_keyword($keyword) ;

                    $this->load->view('adm/templates/header');
                    $this->load->view('adm/templates/sidebar');
                    $this->load->view('karyawan', $data);
                    $this->load->view('adm/templates/footer');
                }
        }