<?php
    class Arsip extends CI_Controller
        {

            
            public function __construct()
            {
                parent::__construct() ;

                if ($this->session->userdata('is_login') != true) {
                    redirect('login') ;
                }

                $this->load->model('m_arsip') ;
            }

            public function index()
            {
                if ($this->input->post('submit')) {
                    $data ['keyword'] = $this->input->post('keyword') ;
                    $this->session->set_userdata('keyword', $data['keyword']) ;
                } else {
                    $data['keyword'] = $this->session->userdata('keyword') ;
                }
                
                $config['base_url']     = 'http://localhost/bbm_ut/arsip/index' ;
                // $this->db->like('nama_mhs', $data['keyword']) ;
                // $this->db->or_like('asal_kampus', $data['keyword']) ;
                // $this->db->or_like('jurusan', $data['keyword']) ;
                // $this->db->or_like('masuk_pkl', $data['keyword']) ;
                // $this->db->or_like('keluar_pkl', $data['keyword']) ;
                // $this->db->or_like('no_telp', $data['keyword']) ;
                // $this->db->or_like('alamat', $data['keyword']) ;
                // $this->db->or_like('email', $data['keyword']) ;
                $this->db->from('tb_arsip') ;
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
                $data['arsip'] = $this->m_arsip->get_data($config["per_page"], $data['start'], $data['keyword']) ;

                $this->load->view('adm/templates/header');
                $this->load->view('adm/templates/sidebar');
                $this->load->view('esr-arsip', $data);
                $this->load->view('adm/templates/footer');

            }
            public function tambah_aksi(){
                $no_dokumen            = $this->input->post('no_dokumen');
                $jenis_dokumen         = $this->input->post('jenis_dokumen');
                $tanggal_dokumen       = $this->input->post('tanggal_dokumen');
                $cabang                = $this->input->post('cabang');
                $status                = $this->input->post('status');
                $type                  = $this->input->post('type');
                $kepada                = $this->input->post('kepada');
                $keperluan             = $this->input->post('keperluan');
                $lokasi_arsip          = $this->input->post('lokasi_arsip');
                $keterangan            = $this->input->post('keterangan');
                $tanggal_keluar_masuk  = $this->input->post('tanggal_masuk_keluar');

                $data = array(
                    'no_dokumen'           => $no_dokumen,
                    'jenis_dokumen'        => $jenis_dokumen,
                    'tanggal_dokumen'      => $tanggal_dokumen,
                    'cabang'               => $cabang,
                    'status'               => $status,
                    'type'                 => $type,
                    'kepada'               => $kepada,
                    'keperluan'            => $keperluan,
                    'lokasi_arsip'         => $lokasi_arsip,
                    'keterangan'           => $keterangan,
                    'tanggal_keluar_masuk' => $lokasi_arsip,
                );

                $this->m_arsip->input_data($data,'tb_arsip');
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Selamat !! </strong> Data arsip Berhasil Di - TAMBAHKAN
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect ('arsip/index');
            }

            public function hapus($id)
                {
                    $where = array ('id' => $id) ;
                    $this->m_arsip->hapus_data($where, 'tb_arsip') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data arsip Berhasil Di - HAPUS (DELETE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect ('arsip/index') ;
                }

            public function edit_arsip($id)
                {
                    $where = array ('id' => $id) ;
                    $data['arsip'] = $this->m_arsip->edit_data($where, 'tb_arsip')->result() ;

                    $this->load->view('adm/templates/header');
                    $this->load->view('adm/templates/sidebar');
                    $this->load->view('adm/edit/edit_arsip', $data);
                    $this->load->view('adm/templates/footer');
                }

            public function update()
                {
                    $id                   = $this->input->post('id') ;
                    $no_dokumen           = $this->input->post('no_dokumen');
                    $jenis_dokumen        = $this->input->post('jenis_dokumen');
                    $tanggal_dokumen      = $this->input->post('tanggal_dokumen');
                    $cabang               = $this->input->post('cabang');
                    $status               = $this->input->post('status');
                    $type                 = $this->input->post('type');
                    $kepada               = $this->input->post('kepada');
                    $keperluan            = $this->input->post('keperluan');
                    $lokasi_arsip         = $this->input->post('lokasi_arsip');  
                    $keterangan           = $this->input->post('keterangan');  
                    $tanggal_keluar_masuk = $this->input->post('tanggal_keluar_masuk');  

                    $data = array (
                        'no_dokumen'            => $no_dokumen,
                        'jenis_dokumen'         => $jenis_dokumen,
                        'tanggal_dokumen'       => $tanggal_dokumen,
                        'cabang'                => $cabang,
                        'status'                => $status,
                        'type'                  => $type,
                        'kepada'                => $kepada,
                        'keperluan'             => $keperluan,
                        'lokasi_arsip'          => $lokasi_arsip,
                        'keterangan'            => $keterangan,
                        'tanggal_keluar_masuk'  => $tanggal_keluar_masuk,
                    ) ;

                    $where = array (
                        'id' => $id 
                    ) ;
                    
                    $this->m_arsip->update_data($where, $data, 'tb_arsip') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data arsip Berhasil Di - PERBAHARUI (UPDATE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('arsip/index') ;
                }
            
            public function detail_arsip($id)
                {
                    $this->load->model('m_arsip') ;
                    $detail = $this->m_arsip->detail_data($id) ;
                    $data['detail_arsip'] = $detail ;

                    $this->load->view('adm/templates/header');
                    $this->load->view('adm/templates/sidebar');
                    $this->load->view('adm/detail/detail_arsip', $data);
                    $this->load->view('adm/templates/footer');
                }

            public function print_arsip()
                {
                    $data['arsip'] = $this->m_arsip->tampil_data('tb_arsip')->result() ;
                    $this->load->view('adm/print/print_arsip', $data);
                }

            public function search()
                {
                    $keyword = $this->input->post('keyword') ;
                    $data['arsip']=$this->m_arsip->get_keyword($keyword) ;

                    $this->load->view('adm/templates/header');
                    $this->load->view('adm/templates/sidebar');
                    $this->load->view('arsip', $data);
                    $this->load->view('adm/templates/footer');
                }
        }