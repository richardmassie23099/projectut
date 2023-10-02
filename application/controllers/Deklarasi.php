<?php
    class Deklarasi extends CI_Controller
        {

            public function __construct()
            {
                parent::__construct() ;
                if ($this->session->userdata('is_login') != true) {
                    redirect('login') ;
                }
                $this->load->model('m_deklarasi') ;
            }

            public function cetak()
            {
                $data['tahun'] = $this->m_deklarasi->gettahun() ;

                $this->load->view('adm/kasir/temp-kasir/header');
                $this->load->view('adm/kasir/temp-kasir/sidebar');
                $this->load->view('adm/kasir/cetak/cetak', $data);
                $this->load->view('adm/kasir/temp-kasir/footer');
            }

            public function cetak_deklarasi()
            {
                $data['tahun'] = $this->m_deklarasi->gettahun() ;

                $this->load->view('adm/kasir/temp-kasir/header');
                $this->load->view('adm/kasir/temp-kasir/sidebar');
                $this->load->view('adm/kasir/cetak/cetak_deklarasi', $data);
                $this->load->view('adm/kasir/temp-kasir/footer');
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
                        $data['title'] = "LAPORAN KONDISI deklarasi" ;
                        $data['subtitle'] = "Tanggal  ".$tanggalawal.' - Tanggal '.$tanggalakhir ;
                        $data['datafilter'] = $this->m_deklarasi->filterbytanggal($tanggalawal, $tanggalakhir) ;

                        $this->load->view('adm/kasir/print_tanggal/print_tanggal_deklarasi', $data);
                    }
                    elseif ($nilaifilter == 2 ) {
                        $data['title'] = "LAPORAN KONDISI deklarasi" ;
                        $data['subtitle'] = "Bulan  ".$bulanawal.' - Bulan  '.$bulanakhir.', Tahun  '.$tahun1 ;
                        $data['datafilter'] = $this->m_deklarasi->filterbybulan($tahun1, $bulanawal, $bulanakhir) ;

                        $this->load->view('adm/kasir/print_tanggal/print_tanggal_deklarasi', $data) ;
                    }
                    elseif ($nilaifilter == 3 ) {
                        $data['title'] = "LAPORAN KONDISI deklarasi" ;
                        $data['subtitle'] = 'Tahun '.$tahun2 ;
                        $data['datafilter'] = $this->m_deklarasi->filterbytahun($tahun2) ;

                        $this->load->view('adm/kasir/print_tanggal/print_tanggal_deklarasi', $data) ;
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
                
                $config['base_url']     = 'http://localhost/e-ewako/deklarasi/index' ;
                $this->db->like('tanggal', $data['keyword']) ;
                $this->db->or_like('keperluan', $data['keyword']) ;
                $this->db->or_like('amount', $data['keyword']) ;
                $this->db->or_like('keterangan', $data['keyword']) ;
                $this->db->or_like('nrp', $data['keyword']) ;
                $this->db->or_like('tanggal_deklarasi', $data['keyword']) ;
                $this->db->or_like('uang_muka', $data['keyword']) ;
                $this->db->or_like('jum_keluar_act', $data['keyword']) ;
                $this->db->or_like('kembali_ke', $data['keyword']) ;
                $this->db->or_like('kembalian', $data['keyword']) ;
                $this->db->or_like('lokasi', $data['keyword']) ;
                $this->db->from('tb_deklarasi') ;
                $config['total_rows']   = $this->db->count_all_results() ;
                $data['total_rows'] = $config['total_rows'] ;
                $config['per_page']     = 50 ;

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
                $data['deklarasi'] = $this->m_deklarasi->get_data($config["per_page"], $data['start'], $data['keyword']) ;

                $this->load->view('adm/kasir/temp-kasir/header');
                $this->load->view('adm/kasir/temp-kasir/sidebar');
                $this->load->view('kasir-deklarasi', $data);
                $this->load->view('adm/kasir/temp-kasir/footer');

            }
            public function tambah_aksi(){
                $tanggal            = $this->input->post('tanggal');
                $keperluan          = $this->input->post('keperluan');
                $nrp                = $this->input->post('nrp');
                $keterangan         = $this->input->post('keterangan');
                $keperluan          = $this->input->post('keperluan');
                $lokasi             = $this->input->post('lokasi');
                $tanggal_deklarasi  = $this->input->post('tanggal_deklarasi');
                $uang_muka          = $this->input->post('uang_muka');
                $jum_keluar_act     = $this->input->post('jum_keluar_act');
                $kembali_ke         = $this->input->post('kembali_ke');
                $kembalian          = $this->input->post('kembalian');
                
                $data = array(
                    'tanggal'           => $tanggal,
                    'keperluan'         => $keperluan,
                    'nrp'               => $nrp,
                    'keterangan'        => $keterangan,
                    'keperluan'         => $keperluan,
                    'lokasi'            => $lokasi,
                    'tanggal_deklarasi' => $tanggal_deklarasi,
                    'uang_muka'         => $uang_muka,
                    'jum_keluar_act'    => $jum_keluar_act,
                    'kembali_ke'        => $kembali_ke,
                    'kembalian'         => $kembalian
                );

                $this->m_deklarasi->input_data($data,'tb_deklarasi');
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Selamat !! </strong> Data Berhasil Di - TAMBAHKAN
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect ('deklarasi/index');
            }

            public function hapus($id)
                {
                    $where = array ('id' => $id) ;
                    $this->m_deklarasi->hapus_data($where, 'tb_deklarasi') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - HAPUS (DELETE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect ('deklarasi/index') ;
                }

            public function form_index()
                {
                    // $where = array ('id' => $id) ;
                    // $data['deklarasi'] = $this->m_deklarasi->edit_data($where, 'tb_deklarasi')->result() ;

                    // $this->load->view('adm/kasir/temp-kasir/header');
                    // $this->load->view('adm/kasir/temp-kasir/sidebar');
                    $this->load->view('adm/kasir/form_deklarasi');
                    // $this->load->view('adm/kasir/temp-kasir/footer');
                }

            public function edit_deklarasi($id)
                {
                    $where = array ('id' => $id) ;
                    $data['deklarasi'] = $this->m_deklarasi->edit_data($where, 'tb_deklarasi')->result() ;

                    $this->load->view('adm/kasir/temp-kasir/header');
                    $this->load->view('adm/kasir/temp-kasir/sidebar');
                    $this->load->view('adm/kasir/edit/edit_deklarasi', $data);
                    $this->load->view('adm/kasir/temp-kasir/footer');
                }
            public function edit_approv($id)
                {
                    $where = array ('id' => $id) ;
                    $data['deklarasi'] = $this->m_deklarasi->edit_data($where, 'tb_deklarasi')->result() ;

                    // $this->load->view('adm/kasir/temp-kasir/header');
                    // $this->load->view('adm/kasir/temp-kasir/sidebar');
                    $this->load->view('adm/kasir/edit/edit_approv_deklarasi', $data);
                    // $this->load->view('adm/kasir/temp-kasir/footer');
                }

            public function update()
                {
                    $id                 = $this->input->post('id') ;
                    $tanggal            = $this->input->post('tanggal');
                    $keperluan          = $this->input->post('keperluan');
                    $nrp                = $this->input->post('nrp');
                    $keterangan         = $this->input->post('keterangan');
                    $keperluan          = $this->input->post('keperluan');
                    $lokasi             = $this->input->post('lokasi');
                    $tanggal_deklarasi  = $this->input->post('tanggal_deklarasi');
                    $uang_muka          = $this->input->post('uang_muka');
                    $jum_keluar_act     = $this->input->post('jum_keluar_act');
                    $kembali_ke         = $this->input->post('kembali_ke');
                    $kembalian          = $this->input->post('kembalian');
                    $approval_1         = $this->input->post('approval_1');
                    $approval_2         = $this->input->post('approval_2');
                    $approval_3         = $this->input->post('approval_3');
                    
                    $data = array(
                        'tanggal'           => $tanggal,
                        'keperluan'         => $keperluan,
                        'nrp'               => $nrp,
                        'keterangan'        => $keterangan,
                        'keperluan'         => $keperluan,
                        'lokasi'            => $lokasi,
                        'tanggal_deklarasi' => $tanggal_deklarasi,
                        'uang_muka'         => $uang_muka,
                        'jum_keluar_act'    => $jum_keluar_act,
                        'kembali_ke'        => $kembali_ke,
                        'approval_1'        => $approval_1,
                        'approval_2'        => $approval_2,
                        'approval_3'        => $approval_3,
                        'kembalian'         => $kembalian
                    ) ;

                    $where = array (
                        'id' => $id 
                    ) ;
                    
                    $this->m_deklarasi->update_data($where, $data, 'tb_deklarasi') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - PERBAHARUI (UPDATE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('deklarasi/index') ;
                }
            
            public function detail_deklarasi($id)
                {
                    $this->load->model('m_deklarasi') ;
                    $detail = $this->m_deklarasi->detail_data($id) ;
                    $data['detail_deklarasi'] = $detail ;

                    $this->load->view('adm/kasir/temp-kasir/header');
                    $this->load->view('adm/kasir/temp-kasir/sidebar');
                    $this->load->view('adm/kasir/detail/detail_deklarasi', $data);
                    $this->load->view('adm/kasir/temp-kasir/footer');
                }

            public function print_deklarasi()
                {
                    $data['deklarasi'] = $this->m_deklarasi->tampil_data('tb_deklarasi')->result() ;
                    $this->load->view('adm/kasir/print/print_deklarasi', $data);
                }

            // public function print_one_deklarasi()
            //     {
            //         $data['deklarasi'] = $this->m_deklarasi->tampil_data('tb_deklarasi')->result() ;
            //         $this->load->view('adm/kasir/print/print_deklarasi', $data);

            //         $this->load->model('m_deklarasi') ;
            //         $print = $this->m_deklarasi->print_data($id) ;
            //         $data['print_deklarasi'] = $print ;
            //     }

            public function pdf()
                {
                    // $this->load->library('dompdf_gen');

                    // $data['deklarasi'] = $this->m_pegawai->tampil_data('tb_tamu')->result() ;
                    // $this->load->view('laporan_pdf', $data) ;

                    // $paper_size  = 'A4' ;
                    // $orientation = 'landscape' ;
                    // $html        = $this->output->get_output() ;
                    // $this->dompdf->set_paper($paper_size, $orientation) ;

                    // $this->dompdf->load_html($html) ;
                    // $this->dompdf->render() ;
                    // $this->dompdf->stream("laporan_bbm.pdf", array('Attachment' => 0)) ;
                }

            public function excel()
                {
                    // $data['pegawai'] = $this->m_pegawai->tampil_data('tb_bbm')->result() ;
                }

            public function search()
                {
                    $keyword = $this->input->post('keyword') ;
                    $data['deklarasi']=$this->m_deklarasi->get_keyword($keyword) ;

                    $this->load->view('adm/kasir/temp-kasir/header');
                    $this->load->view('adm/kasir/temp-kasir/sidebar');
                    $this->load->view('kasir-deklarasi', $data);
                    $this->load->view('adm/kasir/temp-kasir/footer');
                }
        }