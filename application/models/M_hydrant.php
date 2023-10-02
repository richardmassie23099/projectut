<?php
    class  M_hydrant extends CI_Model 
        {
            public function tampil_data()
                {
                    return $this->db->get('tb_hydrant');
                }

            public function get_data($limit, $start, $keyword = null)
                {
                    if ($keyword) {
                        $this->db->like('tanggal', $keyword) ;
                        $this->db->or_like('no_hydrant', $keyword) ;
                        $this->db->or_like('lokasi', $keyword) ;
                        $this->db->or_like('kondisi_hose', $keyword) ;
                        $this->db->or_like('kondisi_nozzle', $keyword) ;
                        $this->db->or_like('stand_hydrant', $keyword) ;
                        $this->db->or_like('lock_pin', $keyword) ;
                        $this->db->or_like('kebocoran', $keyword) ;
                        $this->db->or_like('keterangan', $keyword) ;
                    }
                    return $this->db->get('tb_hydrant', $limit, $start)->result_array() ;
                }

            function input_data($data, $table)
                {
                    $this->db->insert($table, $data);
                }

            public function hapus_data($where, $table)
                {
                    $this->db->where($where);
                    $this->db->delete($table);
                }
            
            public function edit_data($where, $table)
                {
                    return $this->db->get_where($table, $where) ;
                }
            
            public function update_data($where, $data, $table)
                {
                    $this->db->where($where) ;
                    $this->db->update($table, $data) ;
                }

            public function detail_data($id = NULL)
                {
                    $query = $this->db->get_where('tb_hydrant', array('id' => $id))->row();
                    return $query ;
                }

            public function get_keyword($keyword)
                {
                    $this->db->select('*') ;
                    $this->db->from('tb_hydrant') ;

                    $this->db->like('tanggal', $keyword) ;
                    $this->db->or_like('no_hydrant', $keyword) ;
                    $this->db->or_like('lokasi', $keyword) ;
                    $this->db->or_like('kondisi_visual', $keyword) ;
                    $this->db->or_like('arah_jarum', $keyword) ;
                    $this->db->or_like('kondisi_segel', $keyword) ;
                    $this->db->or_like('kondisi_isi', $keyword) ;
                    $this->db->or_like('kondisi_hose', $keyword) ;
                    $this->db->or_like('kondisi_handle', $keyword) ;
                    $this->db->or_like('lock_pin', $keyword) ;
                    $this->db->or_like('kondisi_hydrant', $keyword) ;
                    $this->db->or_like('rambu_hydrant', $keyword) ;
                    $this->db->or_like('keterangan', $keyword) ;

                    return $this->db->get()->result() ;
                }

            function gettahun()
                {
                    $query = $this->db->query(" SELECT YEAR(tanggal) AS tahun FROM tb_hydrant
                        GROUP BY YEAR(tanggal) ORDER by YEAR(tanggal) ASC") ;

                    return $query->result() ;
                }

            function filterbytanggal($tanggalawal, $tanggalakhir)
                {
                    $query = $this->db->query(" SELECT * FROM tb_hydrant where tanggal BETWEEN '$tanggalawal'
                    and '$tanggalakhir' ORDER BY tanggal ASC ") ;

                    return $query->result() ;
                }

            function filterbybulan($tahun1, $bulanawal, $bulanakhir)
                {
                    $query = $this->db->query(" SELECT * FROM tb_hydrant where YEAR(tanggal) = '$tahun1' and MONTH(tanggal)
                    BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY tanggal ASC ") ;

                    return $query->result() ;
                }

            function filterbytahun($tahun2)
                {
                    $query = $this->db->query(" SELECT * FROM tb_hydrant where YEAR(tanggal) = '$tahun2' ORDER BY tanggal ASC ") ;

                    return $query->result() ;
                }
        }