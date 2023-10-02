<?php
    class Bbm extends CI_Controller
        {

            public function __construct()
            {
                parent::__construct() ;

                if ($this->session->userdata('is_login') != true) {
                    redirect('login') ;
                }

                $this->load->model('m_bbm') ;
            }

            public function cetak()
            {
                $data['tahun'] = $this->m_bbm->gettahun() ;

                $this->load->view('adm/esr/temp-esr/header');
                $this->load->view('adm/esr/temp-esr/sidebar');
                $this->load->view('adm/esr/cetak/cetak', $data);
                $this->load->view('adm/esr/temp-esr/footer');
            }

            public function cetak_bbm()
            {
                $data['tahun'] = $this->m_bbm->gettahun() ;

                $this->load->view('adm/esr/temp-esr/header');
                $this->load->view('adm/esr/temp-esr/sidebar');
                $this->load->view('adm/esr/cetak/cetak_bbm', $data);
                $this->load->view('adm/esr/temp-esr/footer');
            }

            function filter()
            {
                $tanggalawal    = $this->input->post('tanggalawal') ;
                $tanggalakhir   = $this->input->post('tanggalakhir') ;
                $tahun1         = $this->input->post('tahun1') ;
                $bulanawal      = $this->input->post('bulanawal') ;
                $bulanakhir     = $this->input->post('bulanakhir') ;
                $tahun2         = $this->input->post('tahun2') ;
                $nilaifilter    = $this->input->post('nilaifilter') ;

                    if ($nilaifilter == 1 ) {
                        $data['title'] = "LAPORAN PENGGUNAAN BAHAN BAKAR MINYAK" ;
                        $data['subtitle'] = "dari Tanggal  ".$tanggalawal.' Sampai pada Tanggal '.$tanggalakhir ;
                        $data['datafilter'] = $this->m_bbm->filterbytanggal($tanggalawal, $tanggalakhir) ;

                        $data['sum_jumlah'] = $this->m_bbm->get_sum() ;
                        $data['sum_harga'] = $this->m_bbm->get_sum() ;

                        $this->load->view('adm/esr/print_tanggal/print_tanggal', $data);
                    }
                    elseif ($nilaifilter == 2 ) {
                        $data['title'] = "LAPORAN PENGGUNAAN BAHAN BAKAR MINYAK" ;
                        $data['subtitle'] = "pada Bulan ".$bulanawal.' sampai pada Bulan '.$bulanakhir.', pada Tahun  '.$tahun1 ;
                        $data['datafilter'] = $this->m_bbm->filterbybulan($tahun1, $bulanawal, $bulanakhir) ;

                        $data['sum_jumlah'] = $this->m_bbm->get_sum() ;
                        $data['sum_harga'] = $this->m_bbm->get_sum() ;

                        $this->load->view('adm/esr/print_tanggal/print_tanggal', $data) ;
                    }
                    elseif ($nilaifilter == 3 ) {
                        $data['title'] = "LAPORAN PENGGUNAAN BAHAN BAKAR MINYAK" ;
                        $data['subtitle'] = 'pada Tahun '.$tahun2 ;
                        $data['datafilter'] = $this->m_bbm->filterbytahun($tahun2) ;

                        $data['sum_jumlah'] = $this->m_bbm->get_sum() ;
                        $data['sum_harga'] = $this->m_bbm->get_sum() ;

                        $this->load->view('adm/esr/print_tanggal/print_tanggal', $data) ;
                    }
            }

            public function index()
            {
                if ($this->input->post('submit')) {
                    $data ['keyword'] = $this->input->post('keyword') ;
                    $this->session->set_userdata('keyword', $data['keyword']) ;
                } else {
                    $data['keyword'] = $this->session->userdata('keyword') ;
                }
                
                $config['base_url']  = 'http://localhost/e-ewako/bbm/index' ;
                $this->db->like('nama', $data['keyword']) ;
                $this->db->or_like('no_pol', $data['keyword']) ;
                $this->db->or_like('jenis_bbm', $data['keyword']) ;
                $this->db->or_like('jumlah_liter', $data['keyword']) ;
                $this->db->or_like('harga_bbm', $data['keyword']) ;
                $this->db->or_like('tanggal', $data['keyword']) ;
                $this->db->from('tb_bbm') ;
                $config['total_rows']   = $this->db->count_all_results() ;
                $data['total_rows'] = $config['total_rows'] ;
                $config['per_page']     = 50 ;

                // Styling
                $config['full_tag_open']    = '<div class="pagging text-center"><nav aria-label="Page navigation example"><ul class="pagination justify-content-center">' ;
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
                $data['bbm'] = $this->m_bbm->get_data($config["per_page"], $data['start'], $data['keyword']) ;

                $data['sum_bayar'] = $this->m_bbm->get_jumlahsum() ;

                $this->load->view('adm/esr/temp-esr/header');
                $this->load->view('adm/esr/temp-esr/sidebar');
                $this->load->view('esr-bbm', $data);
                $this->load->view('adm/esr/temp-esr/footer');
            }

            public function tambah_aksi(){
                $tanggal       = $this->input->post('tanggal');
                $nama          = $this->input->post('nama');
                $no_pol        = $this->input->post('no_pol');
                $jenis_bbm     = $this->input->post('jenis_bbm');
                $jumlah_liter  = $this->input->post('jumlah_liter');
                $harga_bbm     = $this->input->post('harga_bbm');

                $data = array(
                    'tanggal'       => $tanggal,
                    'nama'          => $nama,
                    'no_pol'        => $no_pol,
                    'jenis_bbm'     => $jenis_bbm,
                    'jumlah_liter'  => $jumlah_liter,
                    'harga_bbm'     => $jenis_bbm * $jumlah_liter,
                );

                $this->m_bbm->input_data($data,'tb_bbm');
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Selamat !! </strong> Data Berhasil Di - TAMBAHKAN
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect ('bbm/index');
            }

            public function hapus($id)
                {
                    $where = array ('id' => $id) ;
                    $this->m_bbm->hapus_data($where, 'tb_bbm') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - HAPUS
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect ('bbm/index') ;
                }

            public function edit($id)
                {
                    $where = array ('id' => $id) ;
                    $data['bbm'] = $this->m_bbm->edit_data($where, 'tb_bbm')->result() ;

                    $this->load->view('adm/esr/temp-esr/header');
                    $this->load->view('adm/esr/temp-esr/sidebar');
                    $this->load->view('adm/esr/edit/edit', $data);
                    $this->load->view('adm/esr/temp-esr/footer');
                }

            public function update()
                {
                    $id            = $this->input->post('id') ;
                    $nama          = $this->input->post('nama') ;
                    $no_pol        = $this->input->post('no_pol');
                    $jenis_bbm     = $this->input->post('jenis_bbm');
                    $jumlah_liter  = $this->input->post('jumlah_liter');
                    $harga_bbm     = $this->input->post('harga_bbm');
                    $tanggal       = $this->input->post('tanggal');               

                    $data = array (
                        'nama'          => $nama,
                        'no_pol'        => $no_pol,
                        'jenis_bbm'     => $jenis_bbm,
                        'jumlah_liter'  => $jumlah_liter,
                        'harga_bbm'     => $jenis_bbm * $jumlah_liter,
                        'tanggal'       => $tanggal,
                    ) ;

                    $where = array (
                        'id' => $id 
                    ) ;
                    
                    $this->m_bbm->update_data($where, $data, 'tb_bbm') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - PERBAHARUI (UPDATE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('bbm/index') ;
                }
            
            public function detail($id)
                {
                    $this->load->model('m_bbm') ;
                    $detail = $this->m_bbm->detail_data($id) ;
                    $data['detail'] = $detail ;

                    $this->load->view('adm/esr/temp-esr/header');
                    $this->load->view('adm/esr/temp-esr/sidebar');
                    $this->load->view('adm/esr/detail/detail', $data);
                    $this->load->view('adm/esr/temp-esr/footer');
                }

            public function print()
                {
                    $data['bbm'] = $this->m_bbm->tampil_data('tb_bbm')->result() ;
                    
                    $data['sum_jumlah'] = $this->m_bbm->get_sum() ;
                    $data['sum_harga'] = $this->m_bbm->get_sum() ;

                    $this->load->view('adm/esr/print/print_bbm', $data);

                }

            public function print_bulan()
                {
                    $data['bbm'] = $this->m_bbm->tampil_data('tb_bbm')->result() ;
                    $this->load->view('print_bulan', $data);
                }

            public function search()
                {
                    $keyword = $this->input->post('keyword') ;
                    $data['bbm']=$this->m_bbm->get_keyword($keyword) ;

                    $this->load->view('adm/esr/temp-esr/header');
                    $this->load->view('adm/esr/temp-esr/sidebar');
                    $this->load->view('esr-bbm', $data);
                    $this->load->view('adm/esr/temp-esr/footer');
                }
        }