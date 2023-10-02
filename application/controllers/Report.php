<?php
    class Report extends CI_Controller
        {

            public function __construct()
            {
                parent::__construct() ;
                if ($this->session->userdata('is_login') != true) {
                    redirect('login') ;
                }
                $this->load->model('m_report') ;
            }

            public function cetak()
            {
                $data['tahun'] = $this->m_report->gettahun() ;

                $this->load->view('adm/ga/temp-ga/header');
                $this->load->view('adm/ga/temp-ga/sidebar');
                $this->load->view('adm/ga/cetak/cetak', $data);
                $this->load->view('adm/ga/temp-ga/footer');
            }

            public function cetak_report()
            {
                $data['tahun'] = $this->m_report->gettahun() ;

                $this->load->view('adm/ga/temp-ga/header');
                $this->load->view('adm/ga/temp-ga/sidebar');
                $this->load->view('adm/ga/cetak/cetak_report', $data);
                $this->load->view('adm/ga/temp-ga/footer');
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
                        $data['title'] = "LAPORAN KONDISI report" ;
                        $data['subtitle'] = "Tanggal  ".$tanggalawal.' - Tanggal '.$tanggalakhir ;
                        $data['datafilter'] = $this->m_report->filterbytanggal($tanggalawal, $tanggalakhir) ;

                        $this->load->view('adm/ga/print_tanggal/print_tanggal_report', $data);
                    }
                    elseif ($nilaifilter == 2 ) {
                        $data['title'] = "LAPORAN KONDISI report" ;
                        $data['subtitle'] = "Bulan  ".$bulanawal.' - Bulan  '.$bulanakhir.', Tahun  '.$tahun1 ;
                        $data['datafilter'] = $this->m_report->filterbybulan($tahun1, $bulanawal, $bulanakhir) ;

                        $this->load->view('adm/ga/print_tanggal/print_tanggal_report', $data) ;
                    }
                    elseif ($nilaifilter == 3 ) {
                        $data['title'] = "LAPORAN KONDISI report" ;
                        $data['subtitle'] = 'Tahun '.$tahun2 ;
                        $data['datafilter'] = $this->m_report->filterbytahun($tahun2) ;

                        $this->load->view('adm/ga/print_tanggal/print_tanggal_report', $data) ;
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
                
                $config['base_url']     = 'http://localhost/e-ewako/report/index' ;
                $this->db->like('name_vendor', $data['keyword']) ;
                $this->db->or_like('account_vendor', $data['keyword']) ;
                $this->db->or_like('no_invoice', $data['keyword']) ;
                $this->db->or_like('date_invoice', $data['keyword']) ;
                $this->db->or_like('aging_fp', $data['keyword']) ;
                $this->db->or_like('amount', $data['keyword']) ;
                $this->db->or_like('text', $data['keyword']) ;
                $this->db->or_like('receipt_adm', $data['keyword']) ;
                $this->db->or_like('receipt_user', $data['keyword']) ;
                $this->db->or_like('back_adm', $data['keyword']) ;
                $this->db->or_like('aging', $data['keyword']) ;
                $this->db->or_like('lt', $data['keyword']) ;
                $this->db->or_like('post_date', $data['keyword']) ;
                $this->db->or_like('lt_2', $data['keyword']) ;
                $this->db->or_like('doc_num', $data['keyword']) ;
                $this->db->or_like('tanggal', $data['keyword']) ;
                $this->db->or_like('status', $data['keyword']) ;
                $this->db->or_like('payment', $data['keyword']) ;
                $this->db->from('tb_report') ;
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
                $data['report'] = $this->m_report->get_data($config["per_page"], $data['start'], $data['keyword']) ;

                $this->load->view('adm/ga/temp-ga/header');
                $this->load->view('adm/ga/temp-ga/sidebar');
                $this->load->view('ga-report', $data);
                $this->load->view('adm/ga/temp-ga/footer');

            }
            public function tambah_aksi(){
                $name_vendor      = $this->input->post('name_vendor');
                $account_vendor   = $this->input->post('account_vendor');
                $no_invoice       = $this->input->post('no_invoice');
                $date_invoice     = $this->input->post('date_invoice');
                $aging_fp         = $this->input->post('aging_fp');
                $amount           = $this->input->post('amount');
                $text             = $this->input->post('text');
                $receipt_adm      = $this->input->post('receipt_adm');
                $receipt_user     = $this->input->post('receipt_user');
                $back_adm         = $this->input->post('back_adm');
                $aging            = $this->input->post('aging');
                $lt               = $this->input->post('lt');
                $post_date        = $this->input->post('post_date');
                $lt_2             = $this->input->post('lt_2');
                $doc_num          = $this->input->post('doc_num');
                $tanggal          = $this->input->post('tanggal');
                $status           = $this->input->post('status');
                $payment          = $this->input->post('payment');

                $data = array(
                    'name_vendor'       => $name_vendor,
                    'account_vendor'    => $account_vendor,
                    'no_invoice'        => $no_invoice,
                    'date_invoice'      => $date_invoice,
                    'aging_fp'          => $aging_fp,
                    'amount'            => $amount,
                    'text'              => $text,
                    'receipt_adm'       => $receipt_adm,
                    'receipt_user'      => $receipt_user,
                    'back_adm'          => $back_adm,
                    'aging'             => $aging,
                    'lt'                => $lt,
                    'post_date'         => $post_date,
                    'lt_2'              => $lt_2,
                    'doc_num'           => $doc_num,
                    'tanggal'           => $tanggal,
                    'status'            => $status,
                    'payment'           => $payment
                );

                $this->m_report->input_data($data,'tb_report');
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Selamat !! </strong> Data Berhasil Di - TAMBAHKAN
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect ('report/index');
            }

            public function hapus($id)
                {
                    $where = array ('id' => $id) ;
                    $this->m_report->hapus_data($where, 'tb_report') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - HAPUS (DELETE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect ('report/index') ;
                }

            public function edit_report($id)
                {
                    $where = array ('id' => $id) ;
                    $data['report'] = $this->m_report->edit_data($where, 'tb_report')->result() ;

                    $this->load->view('adm/ga/temp-ga/header');
                    $this->load->view('adm/ga/temp-ga/sidebar');
                    $this->load->view('adm/ga/edit/edit_report', $data);
                    $this->load->view('adm/ga/temp-ga/footer');
                }

            public function update()
                {
                    $id              = $this->input->post('id') ;
                    // $tanggal         = $this->input->post('tanggal');
                    $name_vendor      = $this->input->post('name_vendor');
                    $account_vendor   = $this->input->post('account_vendor');
                    $no_invoice       = $this->input->post('no_invoice');
                    $date_invoice     = $this->input->post('date_invoice');
                    $aging_fp         = $this->input->post('aging_fp');
                    $amount           = $this->input->post('amount');
                    $text             = $this->input->post('text');
                    $receipt_adm      = $this->input->post('receipt_adm');
                    $receipt_user     = $this->input->post('receipt_user');
                    $back_adm         = $this->input->post('back_adm');
                    $aging            = $this->input->post('aging');
                    $lt               = $this->input->post('lt');
                    $post_date        = $this->input->post('post_date');
                    $lt_2             = $this->input->post('lt_2');
                    $doc_num          = $this->input->post('doc_num');
                    $tanggal          = $this->input->post('tanggal');
                    $status           = $this->input->post('status');
                    $payment          = $this->input->post('payment');
    
                    $data = array(
                        // 'tanggal'           => $tanggal,
                        'name_vendor'       => $name_vendor,
                        'account_vendor'    => $account_vendor,
                        'no_invoice'        => $no_invoice,
                        'date_invoice'      => $date_invoice,
                        'aging_fp'          => $aging_fp,
                        'amount'            => $amount,
                        'text'              => $text,
                        'receipt_adm'       => $receipt_adm,
                        'receipt_user'      => $receipt_user,
                        'back_adm'          => $back_adm,
                        'aging'             => $aging,
                        'lt'                => $lt,
                        'post_date'         => $post_date,
                        'lt_2'              => $lt_2,
                        'doc_num'           => $doc_num,
                        'tanggal'           => $tanggal,
                        'status'            => $status,
                        'payment'           => $payment
                    ) ;

                    $where = array (
                        'id' => $id 
                    ) ;
                    
                    $this->m_report->update_data($where, $data, 'tb_report') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - PERBAHARUI (UPDATE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('report/index') ;
                }
            
            public function detail_report($id)
                {
                    $this->load->model('m_report') ;
                    $detail = $this->m_report->detail_data($id) ;
                    $data['detail_report'] = $detail ;

                    $this->load->view('adm/ga/temp-ga/header');
                    $this->load->view('adm/ga/temp-ga/sidebar');
                    $this->load->view('adm/ga/detail/detail_report', $data);
                    $this->load->view('adm/ga/temp-ga/footer');
                }

            public function print_report()
                {
                    $data['report'] = $this->m_report->tampil_data('tb_report')->result() ;
                    $this->load->view('adm/ga/print/print_report', $data);
                }

            public function pdf()
                {
                    // $this->load->library('dompdf_gen');

                    // $data['report'] = $this->m_pegawai->tampil_data('tb_tamu')->result() ;
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
                    $data['report']=$this->m_report->get_keyword($keyword) ;

                    $this->load->view('adm/ga/temp-ga/header');
                    $this->load->view('adm/ga/temp-ga/sidebar');
                    $this->load->view('ga-report', $data);
                    $this->load->view('adm/ga/temp-ga/footer');
                }
        }