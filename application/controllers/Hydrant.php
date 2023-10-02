<?php
    class Hydrant extends CI_Controller
        {

            public function __construct()
            {
                parent::__construct() ;
                if ($this->session->userdata('is_login') != true) {
                    redirect('login') ;
                }
                $this->load->model('m_hydrant') ;
            }

            public function cetak()
            {
                $data['tahun'] = $this->m_hydrant->gettahun() ;

                $this->load->view('adm/esr/temp-esr/header');
                $this->load->view('adm/esr/temp-esr/sidebar');
                $this->load->view('adm/esr/cetak/cetak', $data);
                $this->load->view('adm/esr/temp-esr/footer');
            }

            public function cetak_hydrant()
            {
                $data['tahun'] = $this->m_hydrant->gettahun() ;

                $this->load->view('adm/esr/temp-esr/header');
                $this->load->view('adm/esr/temp-esr/sidebar');
                $this->load->view('adm/esr/cetak/cetak_hydrant', $data);
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
                        $data['title'] = "LAPORAN KONDISI HYDRANT" ;
                        $data['subtitle'] = "Tanggal  ".$tanggalawal.' - Tanggal '.$tanggalakhir ;
                        $data['datafilter'] = $this->m_hydrant->filterbytanggal($tanggalawal, $tanggalakhir) ;

                        $this->load->view('adm/esr/print_tanggal/print_tanggal_hydrant', $data);
                    }
                    elseif ($nilaifilter == 2 ) {
                        $data['title'] = "LAPORAN KONDISI HYDRANT" ;
                        $data['subtitle'] = "Bulan  ".$bulanawal.' - Bulan  '.$bulanakhir.', Tahun  '.$tahun1 ;
                        $data['datafilter'] = $this->m_hydrant->filterbybulan($tahun1, $bulanawal, $bulanakhir) ;

                        $this->load->view('adm/esr/print_tanggal/print_tanggal_hydrant', $data) ;
                    }
                    elseif ($nilaifilter == 3 ) {
                        $data['title'] = "LAPORAN KONDISI HYDRANT" ;
                        $data['subtitle'] = 'Tahun '.$tahun2 ;
                        $data['datafilter'] = $this->m_hydrant->filterbytahun($tahun2) ;

                        $this->load->view('adm/esr/print_tanggal/print_tanggal_hydrant', $data) ;
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
                
                $config['base_url']     = 'http://localhost/e-ewako/hydrant/index' ;
                $this->db->like('tanggal', $data['keyword']) ;
                $this->db->or_like('no_hydrant', $data['keyword']) ;
                $this->db->or_like('lokasi', $data['keyword']) ;
                $this->db->or_like('kondisi_hose', $data['keyword']) ;
                $this->db->or_like('kondisi_nozzle', $data['keyword']) ;
                $this->db->or_like('lock_pin', $data['keyword']) ;
                $this->db->or_like('kebocoran', $data['keyword']) ;
                $this->db->or_like('keterangan', $data['keyword']) ;
                $this->db->from('tb_hydrant') ;
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
                $data['hydrant'] = $this->m_hydrant->get_data($config["per_page"], $data['start'], $data['keyword']) ;

                $this->load->view('adm/esr/temp-esr/header');
                $this->load->view('adm/esr/temp-esr/sidebar');
                $this->load->view('esr-hydrant', $data);
                $this->load->view('adm/esr/temp-esr/footer');

            }
            public function tambah_aksi(){
                $tanggal         = $this->input->post('tanggal');
                $no_hydrant      = $this->input->post('no_hydrant');
                $lokasi          = $this->input->post('lokasi');
                $kondisi_hose    = $this->input->post('kondisi_hose');
                $kondisi_nozzle  = $this->input->post('kondisi_nozzle');
                $stand_hydrant   = $this->input->post('stand_hydrant');
                $lock_pin        = $this->input->post('lock_pin');
                $kebocoran       = $this->input->post('kebocoran');
                $keterangan      = $this->input->post('keterangan');
                $foto            = $_FILES['foto'];
                    if ($foto=''){}else{
                        $config['upload_path']          = './assets/foto/hydrant';
                        $config['allowed_types']        = 'png|jpg|jpeg';
                            
                        $this->load->library('upload',$config);
                        if (!$this->upload->do_upload('foto')){
                            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Mohon Maaf !! </strong> Data Gambar/Foto GAGAL Ter-UPLOAD
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                            redirect ('hydrant/index');
                        } else {
                            $foto=$this->upload->data('file_name');
                        }
                    }
                $data = array(
                    'tanggal'         => $tanggal,
                    'no_hydrant'      => $no_hydrant,
                    'lokasi'          => $lokasi,
                    'kondisi_hose'    => $kondisi_hose,
                    'kondisi_nozzle'  => $kondisi_nozzle,
                    'stand_hydrant'   => $stand_hydrant,
                    'lock_pin'        => $lock_pin,
                    'kebocoran'       => $kebocoran,
                    'keterangan'      => $keterangan,
                    'foto'            => $foto
                );

                $this->m_hydrant->input_data($data,'tb_hydrant');
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Selamat !! </strong> Data Berhasil Di - TAMBAHKAN
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect ('hydrant/index');
            }

            public function hapus($id)
                {
                    $where = array ('id' => $id) ;
                    $this->m_hydrant->hapus_data($where, 'tb_hydrant') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - HAPUS (DELETE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect ('hydrant/index') ;
                }

            public function edit_hydrant($id)
                {
                    $where = array ('id' => $id) ;
                    $data['hydrant'] = $this->m_hydrant->edit_data($where, 'tb_hydrant')->result() ;

                    $this->load->view('adm/esr/temp-esr/header');
                    $this->load->view('adm/esr/temp-esr/sidebar');
                    $this->load->view('adm/esr/edit/edit_hydrant', $data);
                    $this->load->view('adm/esr/temp-esr/footer');
                }

            public function update()
                {
                    $id              = $this->input->post('id') ;
                    $tanggal         = $this->input->post('tanggal');
                    $no_hydrant      = $this->input->post('no_hydrant');
                    $lokasi          = $this->input->post('lokasi');
                    $kondisi_hose    = $this->input->post('kondisi_hose');
                    $kondisi_nozzle  = $this->input->post('kondisi_nozzle');
                    $stand_hydrant   = $this->input->post('stand_hydrant');
                    $lock_pin        = $this->input->post('lock_pin');
                    $kebocoran       = $this->input->post('kebocoran');
                    $keterangan      = $this->input->post('keterangan');           

                    $data = array (
                        'tanggal'         => $tanggal,
                        'no_hydrant'      => $no_hydrant,
                        'lokasi'          => $lokasi,
                        'kondisi_hose'    => $kondisi_hose,
                        'kondisi_nozzle'  => $kondisi_nozzle,
                        'stand_hydrant'   => $kondisi_nozzle,
                        'lock_pin'        => $lock_pin,
                        'kebocoran'       => $kebocoran,
                        'keterangan'      => $keterangan,
                    ) ;

                    $where = array (
                        'id' => $id 
                    ) ;
                    
                    $this->m_hydrant->update_data($where, $data, 'tb_hydrant') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - PERBAHARUI (UPDATE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('hydrant/index') ;
                }
            
            public function detail_hydrant($id)
                {
                    $this->load->model('m_hydrant') ;
                    $detail = $this->m_hydrant->detail_data($id) ;
                    $data['detail_hydrant'] = $detail ;

                    $this->load->view('adm/esr/temp-esr/header');
                    $this->load->view('adm/esr/temp-esr/sidebar');
                    $this->load->view('adm/esr/detail/detail_hydrant', $data);
                    $this->load->view('adm/esr/temp-esr/footer');
                }

            public function print_hydrant()
                {
                    $data['hydrant'] = $this->m_hydrant->tampil_data('tb_hydrant')->result() ;
                    $this->load->view('adm/esr/print/print_hydrant', $data);
                }

            public function pdf()
                {
                    // $this->load->library('dompdf_gen');

                    // $data['hydrant'] = $this->m_pegawai->tampil_data('tb_tamu')->result() ;
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
                    $data['hydrant']=$this->m_hydrant->get_keyword($keyword) ;

                    $this->load->view('adm/esr/temp-esr/header');
                    $this->load->view('adm/esr/temp-esr/sidebar');
                    $this->load->view('hydrant', $data);
                    $this->load->view('adm/esr/temp-esr/footer');
                }
        }