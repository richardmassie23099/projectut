<?php
    class Asset extends CI_Controller
        {

            
            public function __construct()
            {
                parent::__construct() ;

                if ($this->session->userdata('is_login') != true) {
                    redirect('login') ;
                }

                $this->load->model('m_asset') ;
            }

            public function index()
            {
                if ($this->input->post('submit')) {
                    $data ['keyword'] = $this->input->post('keyword') ;
                    $this->session->set_userdata('keyword', $data['keyword']) ;
                } else {
                    $data['keyword'] = $this->session->userdata('keyword') ;
                }
                
                $config['base_url']     = 'http://localhost/bbm_ut/asset/index' ;
                // $this->db->like('nama_mhs', $data['keyword']) ;
                // $this->db->or_like('asal_kampus', $data['keyword']) ;
                // $this->db->or_like('jurusan', $data['keyword']) ;
                // $this->db->or_like('masuk_pkl', $data['keyword']) ;
                // $this->db->or_like('keluar_pkl', $data['keyword']) ;
                // $this->db->or_like('no_telp', $data['keyword']) ;
                // $this->db->or_like('alamat', $data['keyword']) ;
                // $this->db->or_like('email', $data['keyword']) ;
                $this->db->from('tb_asset') ;
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
                $data['asset'] = $this->m_asset->get_data($config["per_page"], $data['start'], $data['keyword']) ;

                $this->load->view('adm/templates/header');
                $this->load->view('adm/templates/sidebar');
                $this->load->view('esr-asset', $data);
                $this->load->view('adm/templates/footer');

            }
            public function tambah_aksi(){
                $no_asset          = $this->input->post('no_asset');
                $class             = $this->input->post('class');
                $cap_date          = $this->input->post('cap_date');
                $deskripsi         = $this->input->post('deskripsi');
                $lokasi            = $this->input->post('lokasi');
                $deskripsi_lokasi  = $this->input->post('deskripsi_lokasi');
                $acq_value         = $this->input->post('acq_value');
                $dep_value         = $this->input->post('dep_value');
                $book_value        = $this->input->post('book_value');
                $kondisi           = $this->input->post('kondisi');
                $utilisasi         = $this->input->post('utilisasi');
                $hilang            = $this->input->post('hilang');
                $keterangan        = $this->input->post('keterangan');

                $data = array(
                    'no_asset'         => $no_asset,
                    'class'            => $class,
                    'cap_date'         => $cap_date,
                    'deskripsi'        => $deskripsi,
                    'lokasi'           => $lokasi,
                    'deskripsi_lokasi' => $deskripsi_lokasi,
                    'acq_value'        => $acq_value,
                    'dep_value'        => $dep_value,
                    'book_value'       => $book_value,
                    'kondisi'          => $kondisi,
                    'utilisasi'        => $utilisasi,
                    'hilang'           => $hilang,
                    'keterangan'       => $keterangan,
                );

                $this->m_asset->input_data($data,'tb_asset');
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Selamat !! </strong> Data asset Berhasil Di - TAMBAHKAN
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect ('asset/index');
            }

            public function hapus($id)
                {
                    $where = array ('id' => $id) ;
                    $this->m_asset->hapus_data($where, 'tb_asset') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data asset Berhasil Di - HAPUS (DELETE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect ('asset/index') ;
                }

            public function edit_asset($id)
                {
                    $where = array ('id' => $id) ;
                    $data['asset'] = $this->m_asset->edit_data($where, 'tb_asset')->result() ;

                    $this->load->view('adm/templates/header');
                    $this->load->view('adm/templates/sidebar');
                    $this->load->view('adm/edit/edit_asset', $data);
                    $this->load->view('adm/templates/footer');
                }

            public function update()
                {
                    $id                = $this->input->post('id') ;
                    $no_asset          = $this->input->post('no_asset');
                    $class             = $this->input->post('class');
                    $cap_date          = $this->input->post('cap_date');
                    $deskripsi         = $this->input->post('deskripsi');
                    $lokasi            = $this->input->post('lokasi');
                    $deskripsi_lokasi  = $this->input->post('deskripsi_lokasi');
                    $acq_value         = $this->input->post('acq_value');
                    $dep_value         = $this->input->post('dep_value');
                    $book_value        = $this->input->post('book_value');
                    $kondisi           = $this->input->post('kondisi');
                    $utilisasi         = $this->input->post('utilisasi');
                    $hilang            = $this->input->post('hilang');
                    $keterangan        = $this->input->post('keterangan');             

                    $data = array (
                        'no_asset'         => $no_asset,
                        'class'            => $class,
                        'cap_date'         => $cap_date,
                        'deskripsi'        => $deskripsi,
                        'lokasi'           => $lokasi,
                        'deskripsi_lokasi' => $deskripsi_lokasi,
                        'acq_value'        => $acq_value,
                        'dep_value'        => $dep_value,
                        'book_value'       => $book_value,
                        'kondisi'          => $kondisi,
                        'utilisasi'        => $utilisasi,
                        'hilang'           => $hilang,
                        'keterangan'       => $keterangan,
                    ) ;

                    $where = array (
                        'id' => $id 
                    ) ;
                    
                    $this->m_asset->update_data($where, $data, 'tb_asset') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data asset Berhasil Di - PERBAHARUI (UPDATE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('asset/index') ;
                }
            
            public function detail_asset($id)
                {
                    $this->load->model('m_asset') ;
                    $detail = $this->m_asset->detail_data($id) ;
                    $data['detail_asset'] = $detail ;

                    $this->load->view('adm/templates/header');
                    $this->load->view('adm/templates/sidebar');
                    $this->load->view('adm/detail/detail_asset', $data);
                    $this->load->view('adm/templates/footer');
                }

            public function print_asset()
                {
                    $data['asset'] = $this->m_asset->tampil_data('tb_asset')->result() ;
                    $this->load->view('adm/print/print_asset', $data);
                }

            public function search()
                {
                    $keyword = $this->input->post('keyword') ;
                    $data['asset']=$this->m_asset->get_keyword($keyword) ;

                    $this->load->view('adm/templates/header');
                    $this->load->view('adm/templates/sidebar');
                    $this->load->view('asset', $data);
                    $this->load->view('adm/templates/footer');
                }
        }