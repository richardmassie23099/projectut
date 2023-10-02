<?php
    class Mahasiswa extends CI_Controller
        {

            
            public function __construct()
            {
                parent::__construct() ;

                if ($this->session->userdata('is_login') != true) {
                    redirect('login') ;
                }

                $this->load->model('m_bbm') ;
            }

            public function index()
            {
                if ($this->input->post('submit')) {
                    $data ['keyword'] = $this->input->post('keyword') ;
                    $this->session->set_userdata('keyword', $data['keyword']) ;
                } else {
                    $data['keyword'] = $this->session->userdata('keyword') ;
                }
                
                $config['base_url']     = 'http://localhost/bbm_ut/mahasiswa/index' ;
                $this->db->like('nama_mhs', $data['keyword']) ;
                $this->db->or_like('asal_kampus', $data['keyword']) ;
                $this->db->or_like('jurusan', $data['keyword']) ;
                $this->db->or_like('masuk_pkl', $data['keyword']) ;
                $this->db->or_like('keluar_pkl', $data['keyword']) ;
                $this->db->or_like('no_telp', $data['keyword']) ;
                $this->db->or_like('alamat', $data['keyword']) ;
                $this->db->or_like('email', $data['keyword']) ;
                $this->db->from('tb_mahasiswa') ;
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
                $data['mahasiswa'] = $this->m_mahasiswa->get_data($config["per_page"], $data['start'], $data['keyword']) ;

                $this->load->view('adm/esr/temp-esr/header');
                $this->load->view('adm/esr/temp-esr/sidebar');
                $this->load->view('esr-mhs', $data);
                $this->load->view('adm/esr/temp-esr/footer');

            }
            public function tambah_aksi(){
                $nama_mhs      = $this->input->post('nama_mhs');
                $asal_kampus   = $this->input->post('asal_kampus');
                $jurusan       = $this->input->post('jurusan');
                $masuk_pkl     = $this->input->post('masuk_pkl');
                $keluar_pkl    = $this->input->post('keluar_pkl');
                $no_telp       = $this->input->post('no_telp');
                $alamat        = $this->input->post('alamat');
                $email         = $this->input->post('email');

                $data = array(
                    'nama_mhs'      => $nama_mhs,
                    'asal_kampus'   => $asal_kampus,
                    'masuk_pkl'     => $masuk_pkl,
                    'keluar_pkl'    => $keluar_pkl,
                    'jurusan'       => $jurusan,
                    'alamat'        => $alamat,
                    'email'         => $email,
                    'no_telp'       => $no_telp,
                );

                $this->m_mahasiswa->input_data($data,'tb_mahasiswa');
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Selamat !! </strong> Data Mahasiswa Berhasil Di - TAMBAHKAN
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect ('mahasiswa/index');
            }

            public function hapus($id)
                {
                    $where = array ('id' => $id) ;
                    $this->m_mahasiswa->hapus_data($where, 'tb_mahasiswa') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Mahasiswa Berhasil Di - HAPUS (DELETE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect ('mahasiswa/index') ;
                }

            public function edit_mahasiswa($id)
                {
                    $where = array ('id' => $id) ;
                    $data['mahasiswa'] = $this->m_mahasiswa->edit_data($where, 'tb_mahasiswa')->result() ;

                    $this->load->view('adm/esr/temp-esr/header');
                    $this->load->view('adm/esr/temp-esr/sidebar');
                    $this->load->view('edit_mahasiswa', $data);
                    $this->load->view('adm/esr/temp-esr/footer');
                }

            public function update()
                {
                    $id         = $this->input->post('id') ;
                    $nama_mhs      = $this->input->post('nama_mhs');
                    $asal_kampus   = $this->input->post('asal_kampus');
                    $jurusan       = $this->input->post('jurusan');
                    $masuk_pkl     = $this->input->post('masuk_pkl');
                    $keluar_pkl    = $this->input->post('keluar_pkl');
                    $no_telp       = $this->input->post('no_telp');
                    $alamat        = $this->input->post('alamat');
                    $email         = $this->input->post('email');               

                    $data = array (
                        'nama_mhs'      => $nama_mhs,
                        'asal_kampus'   => $asal_kampus,
                        'masuk_pkl'     => $masuk_pkl,
                        'keluar_pkl'    => $keluar_pkl,
                        'jurusan'       => $jurusan,
                        'alamat'        => $alamat,
                        'email'         => $email,
                        'no_telp'       => $no_telp,
                    ) ;

                    $where = array (
                        'id' => $id 
                    ) ;
                    
                    $this->m_mahasiswa->update_data($where, $data, 'tb_mahasiswa') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Mahasiswa Berhasil Di - PERBAHARUI (UPDATE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('mahasiswa/index') ;
                }
            
            public function detail_mahasiswa($id)
                {
                    $this->load->model('m_mahasiswa') ;
                    $detail = $this->m_mahasiswa->detail_data($id) ;
                    $data['detail_mahasiswa'] = $detail ;

                    $this->load->view('adm/esr/temp-esr/header');
                    $this->load->view('adm/esr/temp-esr/sidebar');
                    $this->load->view('detail_mahasiswa', $data);
                    $this->load->view('adm/esr/temp-esr/footer');
                }

            public function print_mahasiswa()
                {
                    $data['mahasiswa'] = $this->m_mahasiswa->tampil_data('tb_mahasiswa')->result() ;
                    $this->load->view('adm/esr/print/print_mahasiswa', $data);
                }

            public function search()
                {
                    $keyword = $this->input->post('keyword') ;
                    $data['mahasiswa']=$this->m_mahasiswa->get_keyword($keyword) ;

                    $this->load->view('adm/esr/temp-esr/header');
                    $this->load->view('adm/esr/temp-esr/sidebar');
                    $this->load->view('mahasiswa', $data);
                    $this->load->view('adm/esr/temp-esr/footer');
                }
        }