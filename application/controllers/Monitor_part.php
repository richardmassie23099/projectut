<?php
    class Monitor_part extends CI_Controller
        {

            public function __construct()
            {
                parent::__construct() ;
                if ($this->session->userdata('is_login') != true) {
                    redirect('login') ;
                }
                $this->load->model('m_monitor_part') ;
            }

            public function cetak()
            {
                $data['tahun'] = $this->m_monitor_part->gettahun() ;

                $this->load->view('adm/pst/temp-pst/header');
                $this->load->view('adm/pst/temp-pst/sidebar');
                $this->load->view('adm/pst/cetak/cetak', $data);
                $this->load->view('adm/pst/temp-pst/footer');
            }

            public function cetak_monitor_part()
            {
                $data['tahun'] = $this->m_monitor_part->gettahun() ;

                $this->load->view('adm/pst/temp-pst/header');
                $this->load->view('adm/pst/temp-pst/sidebar');
                $this->load->view('adm/pst/cetak/cetak_monitor_part', $data);
                $this->load->view('adm/pst/temp-pst/footer');
            }

            function filter()
            {
                $tangpstlawal    = $this->input->post('tangpstlawal') ;
                $tangpstlakhir   = $this->input->post('tangpstlakhir') ;
                $tahun1         = $this->input->post('tahun1') ;
                $bulanawal      = $this->input->post('bulanawal') ;
                $bulanakhir     = $this->input->post('bulanakhir') ;
                $tahun2         = $this->input->post('tahun2') ;
                $nilaifilter    = $this->input->post('nilaifilter') ;

                    if ($nilaifilter == 1 ) {
                        $data['title'] = "LAPORAN KONDISI monitor_part" ;
                        $data['subtitle'] = "Tangpstl  ".$tangpstlawal.' - Tangpstl '.$tangpstlakhir ;
                        $data['datafilter'] = $this->m_monitor_part->filterbytangpstl($tangpstlawal, $tangpstlakhir) ;

                        $this->load->view('adm/pst/print_tanggal/print_tanggal_monitor_part', $data);
                    }
                    elseif ($nilaifilter == 2 ) {
                        $data['title'] = "LAPORAN KONDISI monitor_part" ;
                        $data['subtitle'] = "Bulan  ".$bulanawal.' - Bulan  '.$bulanakhir.', Tahun  '.$tahun1 ;
                        $data['datafilter'] = $this->m_monitor_part->filterbybulan($tahun1, $bulanawal, $bulanakhir) ;

                        $this->load->view('adm/pst/print_tanggal/print_tanggal_monitor_part', $data) ;
                    }
                    elseif ($nilaifilter == 3 ) {
                        $data['title'] = "LAPORAN KONDISI monitor_part" ;
                        $data['subtitle'] = 'Tahun '.$tahun2 ;
                        $data['datafilter'] = $this->m_monitor_part->filterbytahun($tahun2) ;

                        $this->load->view('adm/pst/print_tanggal/print_tanggal_monitor_part', $data) ;
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
                
                $config['base_url']     = 'http://localhost/e-ewako/monitor_part/index' ;
                $this->db->like('tanggal', $data['keyword']) ;
                $this->db->or_like('part_num', $data['keyword']) ;
                $this->db->or_like('keterangan', $data['keyword']) ;
                $this->db->or_like('over', $data['keyword']) ;
                $this->db->or_like('short', $data['keyword']) ;
                $this->db->or_like('status', $data['keyword']) ;
                $this->db->or_like('remark', $data['keyword']) ;
                $this->db->from('tb_monitor_part') ;
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
                $data['monitor_part'] = $this->m_monitor_part->get_data($config["per_page"], $data['start'], $data['keyword']) ;

                $this->load->view('adm/pst/temp-pst/header');
                $this->load->view('adm/pst/temp-pst/sidebar');
                $this->load->view('pst-monitor-part', $data);
                $this->load->view('adm/pst/temp-pst/footer');

            }
            public function tambah_aksi(){
                $tanggal        = $this->input->post('tanggal');
                $part_num       = $this->input->post('part_num');
                $keterangan     = $this->input->post('keterangan');
                $over           = $this->input->post('over');
                $short          = $this->input->post('short');
                $status         = $this->input->post('status');
                $remark         = $this->input->post('remark');

                $data = array(
                    'tanggal'     => $tanggal,
                    'part_num'    => $part_num,
                    'keterangan'  => $keterangan,
                    'over'        => $over,
                    'short'       => $short,
                    'status'      => $status,
                    'remark'      => $remark
                );

                $this->m_monitor_part->input_data($data,'tb_monitor_part');
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Selamat !! </strong> Data Berhasil Di - TAMBAHKAN
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect ('monitor_part/index');
            }

            public function hapus($id)
                {
                    $where = array ('id' => $id) ;
                    $this->m_monitor_part->hapus_data($where, 'tb_monitor_part') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - HAPUS (DELETE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect ('monitor_part/index') ;
                }

            public function edit_monitor_part($id)
                {
                    $where = array ('id' => $id) ;
                    $data['monitor_part'] = $this->m_monitor_part->edit_data($where, 'tb_monitor_part')->result() ;

                    $this->load->view('adm/pst/temp-pst/header');
                    $this->load->view('adm/pst/temp-pst/sidebar');
                    $this->load->view('adm/pst/edit/edit_monitor_part', $data);
                    $this->load->view('adm/pst/temp-pst/footer');
                }

            public function update()
                {
                    $id              = $this->input->post('id') ;
                    $tanggal        = $this->input->post('tanggal');
                    $part_num       = $this->input->post('part_num');
                    $keterangan     = $this->input->post('keterangan');
                    $over           = $this->input->post('over');
                    $short          = $this->input->post('short');
                    $status         = $this->input->post('status');
                    $remark         = $this->input->post('remark');
    
                    $data = array(
                        'tanggal'     => $tanggal,
                        'part_num'    => $part_num,
                        'keterangan'  => $keterangan,
                        'over'        => $over,
                        'short'       => $short,
                        'status'      => $status,
                        'remark'      => $remark
                    ) ;

                    $where = array (
                        'id' => $id 
                    ) ;
                    
                    $this->m_monitor_part->update_data($where, $data, 'tb_monitor_part') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - PERBAHARUI (UPDATE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('monitor_part/index') ;
                }
            
            public function detail_monitor_part($id)
                {
                    $this->load->model('m_monitor_part') ;
                    $detail = $this->m_monitor_part->detail_data($id) ;
                    $data['detail_monitor_part'] = $detail ;

                    $this->load->view('adm/pst/temp-pst/header');
                    $this->load->view('adm/pst/temp-pst/sidebar');
                    $this->load->view('adm/pst/detail/detail_monitor_part', $data);
                    $this->load->view('adm/pst/temp-pst/footer');
                }

            public function print_monitor_part()
                {
                    $data['monitor_part'] = $this->m_monitor_part->tampil_data('tb_monitor_part')->result() ;
                    $this->load->view('adm/pst/print/print_monitor_part', $data);
                }

            public function pdf()
                {
                    // $this->load->library('dompdf_gen');

                    // $data['monitor_part'] = $this->m_pepstwai->tampil_data('tb_tamu')->result() ;
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
                    // $data['pepstwai'] = $this->m_pepstwai->tampil_data('tb_bbm')->result() ;
                }

            public function search()
                {
                    $keyword = $this->input->post('keyword') ;
                    $data['monitor_part']=$this->m_monitor_part->get_keyword($keyword) ;

                    $this->load->view('adm/pst/temp-pst/header');
                    $this->load->view('adm/pst/temp-pst/sidebar');
                    $this->load->view('pst-monitor_part', $data);
                    $this->load->view('adm/pst/temp-pst/footer');
                }
        }