<?php
    class Permohonan extends CI_Controller
        {

            public function __construct()
            {
                parent::__construct() ;
                if ($this->session->userdata('is_login') != true) {
                    redirect('login') ;
                }
                $this->load->model('m_permohonan') ;
            }

            public function cetak()
            {
                $data['tahun'] = $this->m_permohonan->gettahun() ;

                $this->load->view('adm/kasir/temp-kasir/header');
                $this->load->view('adm/kasir/temp-kasir/sidebar');
                $this->load->view('adm/kasir/cetak/cetak', $data);
                $this->load->view('adm/kasir/temp-kasir/footer');
            }

            public function cetak_permohonan()
            {
                $data['tahun'] = $this->m_permohonan->gettahun() ;

                $this->load->view('adm/kasir/temp-kasir/header');
                $this->load->view('adm/kasir/temp-kasir/sidebar');
                $this->load->view('adm/kasir/cetak/cetak_permohonan', $data);
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
                        $data['title'] = "LAPORAN KONDISI permohonan" ;
                        $data['subtitle'] = "Tanggal  ".$tanggalawal.' - Tanggal '.$tanggalakhir ;
                        $data['datafilter'] = $this->m_permohonan->filterbytanggal($tanggalawal, $tanggalakhir) ;

                        $this->load->view('adm/kasir/print_tanggal/print_tanggal_permohonan', $data);
                    }
                    elseif ($nilaifilter == 2 ) {
                        $data['title'] = "LAPORAN KONDISI permohonan" ;
                        $data['subtitle'] = "Bulan  ".$bulanawal.' - Bulan  '.$bulanakhir.', Tahun  '.$tahun1 ;
                        $data['datafilter'] = $this->m_permohonan->filterbybulan($tahun1, $bulanawal, $bulanakhir) ;

                        $this->load->view('adm/kasir/print_tanggal/print_tanggal_permohonan', $data) ;
                    }
                    elseif ($nilaifilter == 3 ) {
                        $data['title'] = "LAPORAN KONDISI permohonan" ;
                        $data['subtitle'] = 'Tahun '.$tahun2 ;
                        $data['datafilter'] = $this->m_permohonan->filterbytahun($tahun2) ;

                        $this->load->view('adm/kasir/print_tanggal/print_tanggal_permohonan', $data) ;
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
                
                $config['base_url']     = 'http://localhost/e-ewako/permohonan/index' ;
                $this->db->like('tanggal', $data['keyword']) ;
                $this->db->or_like('nama', $data['keyword']) ;
                $this->db->or_like('nrp', $data['keyword']) ;
                $this->db->or_like('jabatan', $data['keyword']) ;
                $this->db->or_like('dept', $data['keyword']) ;
                $this->db->or_like('lokasi', $data['keyword']) ;
                $this->db->or_like('pengeluaran', $data['keyword']) ;
                $this->db->or_like('pengganti', $data['keyword']) ;
                $this->db->or_like('lokasi_claim', $data['keyword']) ;
                $this->db->or_like('tanggal_claim', $data['keyword']) ;
                $this->db->from('tb_permohonan') ;
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
                $data['permohonan'] = $this->m_permohonan->get_data($config["per_page"], $data['start'], $data['keyword']) ;

                $this->load->view('adm/kasir/temp-kasir/header');
                $this->load->view('adm/kasir/temp-kasir/sidebar');
                $this->load->view('kasir-permohonan', $data);
                $this->load->view('adm/kasir/temp-kasir/footer');

            }
            public function tambah_aksi(){
                $tanggal        = $this->input->post('tanggal');
                $nama           = $this->input->post('nama');
                $nrp            = $this->input->post('nrp');
                $jabatan        = $this->input->post('jabatan');
                $dept           = $this->input->post('dept');
                $lokasi         = $this->input->post('lokasi');
                $pengeluaran    = $this->input->post('pengeluaran');
                $pengganti      = $this->input->post('pengganti');
                $pemakaian      = $this->input->post('pemakaian');
                $lokasi_claim   = $this->input->post('lokasi_claim');
                $tanggal_claim  = $this->input->post('tanggal_claim');
                
                $data = array(
                    'tanggal'       => $tanggal,
                    'nama'          => $nama,
                    'nrp'           => $nrp,
                    'jabatan'       => $jabatan,
                    'dept'          => $dept,
                    'lokasi'        => $lokasi,
                    'pengeluaran'   => $pengeluaran,
                    'pengganti'     => $pengganti,
                    'pemakaian'     => $pemakaian,
                    'lokasi_claim'  => $lokasi_claim,
                    'tanggal_claim' => $tanggal_claim
                );

                $this->m_permohonan->input_data($data,'tb_permohonan');
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Selamat !! </strong> Data Berhasil Di - TAMBAHKAN
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect ('permohonan/index');
            }

            public function hapus($id)
                {
                    $where = array ('id' => $id) ;
                    $this->m_permohonan->hapus_data($where, 'tb_permohonan') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - HAPUS (DELETE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect ('permohonan/index') ;
                }

            public function edit_permohonan($id)
                {
                    $where = array ('id' => $id) ;
                    $data['permohonan'] = $this->m_permohonan->edit_data($where, 'tb_permohonan')->result() ;

                    $this->load->view('adm/kasir/temp-kasir/header');
                    $this->load->view('adm/kasir/temp-kasir/sidebar');
                    $this->load->view('adm/kasir/edit/edit_permohonan', $data);
                    $this->load->view('adm/kasir/temp-kasir/footer');
                }

            public function update()
                {
                    $id              = $this->input->post('id') ;
                    $tanggal        = $this->input->post('tanggal');
                    $nama           = $this->input->post('nama');
                    $nrp            = $this->input->post('nrp');
                    $jabatan        = $this->input->post('jabatan');
                    $dept           = $this->input->post('dept');
                    $lokasi         = $this->input->post('lokasi');
                    $pengeluaran    = $this->input->post('pengeluaran');
                    $pengganti      = $this->input->post('pengganti');
                    $pemakaian      = $this->input->post('pemakaian');
                    $lokasi_claim   = $this->input->post('lokasi_claim');
                    $tanggal_claim  = $this->input->post('tanggal_claim');
                    
                    $data = array(
                        'tanggal'       => $tanggal,
                        'nama'          => $nama,
                        'nrp'           => $nrp,
                        'jabatan'       => $jabatan,
                        'dept'          => $dept,
                        'lokasi'        => $lokasi,
                        'pengeluaran'   => $pengeluaran,
                        'pengganti'     => $pengganti,
                        'pemakaian'     => $pemakaian,
                        'lokasi_claim'  => $lokasi_claim,
                        'tanggal_claim' => $tanggal_claim
                    ) ;

                    $where = array (
                        'id' => $id 
                    ) ;
                    
                    $this->m_permohonan->update_data($where, $data, 'tb_permohonan') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - PERBAHARUI (UPDATE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('permohonan/index') ;
                }
            
            public function detail_permohonan($id)
                {
                    $this->load->model('m_permohonan') ;
                    $detail = $this->m_permohonan->detail_data($id) ;
                    $data['detail_permohonan'] = $detail ;

                    $this->load->view('adm/kasir/temp-kasir/header');
                    $this->load->view('adm/kasir/temp-kasir/sidebar');
                    $this->load->view('adm/kasir/detail/detail_permohonan', $data);
                    $this->load->view('adm/kasir/temp-kasir/footer');
                }

            public function print_permohonan()
                {
                    $data['permohonan'] = $this->m_permohonan->tampil_data('tb_permohonan')->result() ;
                    $this->load->view('adm/kasir/print/print_permohonan', $data);
                }

            // public function print_one_permohonan()
            //     {
            //         $data['permohonan'] = $this->m_permohonan->tampil_data('tb_permohonan')->result() ;
            //         $this->load->view('adm/kasir/print/print_permohonan', $data);

            //         $this->load->model('m_permohonan') ;
            //         $print = $this->m_permohonan->print_data($id) ;
            //         $data['print_permohonan'] = $print ;
            //     }

            public function pdf()
                {
                    // $this->load->library('dompdf_gen');

                    // $data['permohonan'] = $this->m_pegawai->tampil_data('tb_tamu')->result() ;
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
                    $data['permohonan']=$this->m_permohonan->get_keyword($keyword) ;

                    $this->load->view('adm/kasir/temp-kasir/header');
                    $this->load->view('adm/kasir/temp-kasir/sidebar');
                    $this->load->view('kasir-permohonan', $data);
                    $this->load->view('adm/kasir/temp-kasir/footer');
                }
        }