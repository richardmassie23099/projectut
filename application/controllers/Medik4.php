<?php
    class Medik4 extends CI_Controller
        {

            public function __construct()
            {
                parent::__construct() ;
                if ($this->session->userdata('is_login') != true) {
                    redirect('login') ;
                }
                $this->load->model('m_medik4') ;
            }

            public function cetak()
            {
                $data['tahun'] = $this->m_medik4->gettahun() ;

                $this->load->view('adm/esr/temp-esr/header');
                $this->load->view('adm/esr/temp-esr/sidebar');
                $this->load->view('adm/esr/cetak/cetak', $data);
                $this->load->view('adm/esr/temp-esr/footer');
            }

            public function cetak_medik4()
            {
                $data['tahun'] = $this->m_medik4->gettahun() ;

                $this->load->view('adm/esr/temp-esr/header');
                $this->load->view('adm/esr/temp-esr/sidebar');
                $this->load->view('adm/esr/cetak/cetak_medik4', $data);
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
                        $data['title'] = "LAPORAN KONDISI KOTAK P3K" ;
                        $data['subtitle'] = "Tanggal  ".$tanggalawal.' - Tanggal '.$tanggalakhir ;
                        $data['datafilter'] = $this->m_medik4->filterbytanggal($tanggalawal, $tanggalakhir) ;

                        $this->load->view('adm/esr/print_tanggal/print_tanggal_medik4', $data);
                    }
                    elseif ($nilaifilter == 2 ) {
                        $data['title'] = "LAPORAN KONDISI KOTAK P3K" ;
                        $data['subtitle'] = "Bulan  ".$bulanawal.' - Bulan  '.$bulanakhir.', Tahun  '.$tahun1 ;
                        $data['datafilter'] = $this->m_medik4->filterbybulan($tahun1, $bulanawal, $bulanakhir) ;

                        $this->load->view('adm/esr/print_tanggal/print_tanggal_medik4', $data) ;
                    }
                    elseif ($nilaifilter == 3 ) {
                        $data['title'] = "LAPORAN KONDISI KOTAK P3K" ;
                        $data['subtitle'] = 'Tahun '.$tahun2 ;
                        $data['datafilter'] = $this->m_medik4->filterbytahun($tahun2) ;

                        $this->load->view('adm/esr/print_tanggal/print_tanggal_medik4', $data) ;
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
                
                $config['base_url']     = 'http://localhost/e-ewako/medik4/index' ;
                $this->db->like('tanggal', $data['keyword']) ;
                $this->db->or_like('penggunaan', $data['keyword']) ;
                $this->db->or_like('dimensi', $data['keyword']) ;
                $this->db->or_like('nama_obat', $data['keyword']) ;
                $this->db->or_like('satuan', $data['keyword']) ;
                $this->db->or_like('jumlah', $data['keyword']) ;
                $this->db->or_like('kondisi', $data['keyword']) ;
                $this->db->or_like('keterangan', $data['keyword']) ;
                $this->db->from('tb_medik4') ;
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
                $data['medik4'] = $this->m_medik4->get_data($config["per_page"], $data['start'], $data['keyword']) ;  

                $this->load->view('adm/esr/temp-esr/header');
                $this->load->view('adm/esr/temp-esr/sidebar');
                $this->load->view('esr-medik4', $data);
                $this->load->view('adm/esr/temp-esr/footer');

            }

            public function tambah_aksi(){
                $tanggal      = $this->input->post('tanggal');
                $penggunaan   = $this->input->post('penggunaan');
                $dimensi      = $this->input->post('dimensi');
                $nama_obat    = $this->input->post('nama_obat');
                $satuan       = $this->input->post('satuan');
                $jumlah       = $this->input->post('jumlah');
                $kondisi      = $this->input->post('kondisi');
                $keterangan   = $this->input->post('keterangan');

                $data = array(
                    'tanggal'      => $tanggal,
                    'penggunaan'   => $penggunaan,
                    'dimensi'      => $dimensi,
                    'nama_obat'    => $nama_obat,
                    'satuan'       => $satuan,
                    'jumlah'       => $jumlah,
                    'kondisi'      => $kondisi,
                    'keterangan'   => $keterangan
                );

                $this->m_medik4->input_data($data,'tb_medik4');
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Selamat !! </strong> Data Berhasil Di - TAMBAHKAN
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect ('medik4/index');
            }

            public function hapus($id)
                {
                    $where = array ('id' => $id) ;
                    $this->m_medik4->hapus_data($where, 'tb_medik4') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - HAPUS (DELETE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect ('medik4/index') ;
                }

            public function edit_medik4($id)
                {
                    $where = array ('id' => $id) ;
                    $data['medik4'] = $this->m_medik4->edit_data($where, 'tb_medik4')->result() ;

                    $this->load->view('adm/esr/temp-esr/header');
                    $this->load->view('adm/esr/temp-esr/sidebar');
                    $this->load->view('adm/esr/edit/edit_medik4', $data);
                    $this->load->view('adm/esr/temp-esr/footer');
                }

            public function update()
                {
                    $id           = $this->input->post('id') ;
                    $tanggal      = $this->input->post('tanggal');
                    $penggunaan   = $this->input->post('penggunaan');
                    $dimensi      = $this->input->post('dimensi');
                    $nama_obat    = $this->input->post('nama_obat');
                    $satuan       = $this->input->post('satuan');
                    $jumlah       = $this->input->post('jumlah');
                    $kondisi      = $this->input->post('kondisi');
                    $keterangan   = $this->input->post('keterangan');      

                    $data = array (
                        'tanggal'      => $tanggal,
                        'penggunaan'   => $penggunaan,
                        'dimensi'      => $dimensi,
                        'nama_obat'    => $nama_obat,
                        'satuan'       => $satuan,
                        'jumlah'       => $jumlah,
                        'kondisi'      => $kondisi,
                        'keterangan'   => $keterangan
                    ) ;

                    $where = array (
                        'id' => $id 
                    ) ;
                    
                    $this->m_medik4->update_data($where, $data, 'tb_medik4') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - PERBAHARUI (UPDATE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('medik4/index') ;
                }
            
            public function detail_medik4($id)
                {
                    $this->load->model('m_medik4') ;
                    $detail = $this->m_medik4->detail_data($id) ;
                    $data['detail_medik4'] = $detail ;

                    $this->load->view('adm/esr/temp-esr/header');
                    $this->load->view('adm/esr/temp-esr/sidebar');
                    $this->load->view('adm/esr/detail/detail_medik4', $data);
                    $this->load->view('adm/esr/temp-esr/footer');
                }

            public function print_medik4()
                {
                    $data['medik4'] = $this->m_medik4->tampil_data('tb_medik4')->result() ;
                    $this->load->view('adm/esr/print/print_medik4', $data);
                }

            public function pdf()
                {
                    // $this->load->library('dompdf_gen');

                    // $data['apar'] = $this->m_pegawai->tampil_data('tb_tamu')->result() ;
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
                    $data['medik4']=$this->m_medik4->get_keyword($keyword) ;

                    $this->load->view('adm/esr/temp-esr/header');
                    $this->load->view('adm/esr/temp-esr/sidebar');
                    $this->load->view('medik4', $data);
                    $this->load->view('adm/esr/temp-esr/footer');
                }
        }