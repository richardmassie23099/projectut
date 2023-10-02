<?php
    class  M_permohonan extends CI_Model 
        {
            public function tampil_data()
                {
                    return $this->db->get('tb_permohonan');
                }

            public function get_data($limit, $start, $keyword = null)
                {
                    if ($keyword) {
                        $this->db->like('tanggal', $keyword) ;
                        $this->db->or_like('nama', $keyword) ;
                        $this->db->or_like('nrp', $keyword) ;
                        $this->db->or_like('jabatan', $keyword) ;
                        $this->db->or_like('dept', $keyword) ;
                        $this->db->or_like('lokasi', $keyword) ;
                        $this->db->or_like('pengeluaran', $keyword) ;
                        $this->db->or_like('pengganti', $keyword) ;
                        $this->db->or_like('pemakaian', $keyword) ;
                        $this->db->or_like('lokasi_claim', $keyword) ;
                        $this->db->or_like('tanggal_claim', $keyword) ;
                    }
                    return $this->db->get('tb_permohonan', $limit, $start)->result_array() ;
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
                    $query = $this->db->get_where('tb_permohonan', array('id' => $id))->row();
                    return $query ;
                }

            // public function print_data($id = NULL)
            //     {
            //         $query = $this->db->get_where('tb_permohonan', array('id' => $id))->row();
            //         return $query ;
            //     }

            public function get_keyword($keyword)
                {
                    $this->db->select('*') ;
                    $this->db->from('tb_permohonan') ;

                    $this->db->like('tanggal', $keyword) ;
                    $this->db->or_like('nama', $keyword) ;
                    $this->db->or_like('nrp', $keyword) ;
                    $this->db->or_like('jabatan', $keyword) ;
                    $this->db->or_like('dept', $keyword) ;
                    $this->db->or_like('lokasi', $keyword) ;
                    $this->db->or_like('pengeluaran', $keyword) ;
                    $this->db->or_like('pengganti', $keyword) ;
                    $this->db->or_like('pemakaian', $keyword) ;
                    $this->db->or_like('lokasi_claim', $keyword) ;
                    $this->db->or_like('tanggal_claim', $keyword) ;

                    return $this->db->get()->result() ;
                }

            function gettahun()
                {
                    $query = $this->db->query(" SELECT YEAR(tanggal) AS tahun FROM tb_permohonan
                        GROUP BY YEAR(tanggal) ORDER by YEAR(tanggal) ASC") ;

                    return $query->result() ;
                }

            function filterbytanggal($tanggalawal, $tanggalakhir)
                {
                    $query = $this->db->query(" SELECT * FROM tb_permohonan where tanggal BETWEEN '$tanggalawal'
                    and '$tanggalakhir' ORDER BY tanggal ASC ") ;

                    return $query->result() ;
                }

            function filterbybulan($tahun1, $bulanawal, $bulanakhir)
                {
                    $query = $this->db->query(" SELECT * FROM tb_permohonan where YEAR(tanggal) = '$tahun1' and MONTH(tanggal)
                    BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY tanggal ASC ") ;

                    return $query->result() ;
                }

            function filterbytahun($tahun2)
                {
                    $query = $this->db->query(" SELECT * FROM tb_permohonan where YEAR(tanggal) = '$tahun2' ORDER BY tanggal ASC ") ;

                    return $query->result() ;
                }
        }