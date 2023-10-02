<?php
    class  M_bbm extends CI_Model 
        {
            public function tampil_data()
                {
                    return $this->db->get('tb_bbm');
                }

            public function get_data($limit, $start, $keyword = null)
                {
                    if ($keyword) {
                        $this->db->like('nama', $keyword) ;
                        $this->db->or_like('tanggal', $keyword) ;
                        $this->db->or_like('no_pol', $keyword) ;
                        $this->db->or_like('jenis_bbm', $keyword) ;
                        $this->db->or_like('jumlah_liter', $keyword) ;
                        $this->db->or_like('harga_bbm', $keyword) ;
                    }
                    return $this->db->get('tb_bbm', $limit, $start)->result_array() ;
                }

            public function get_sum()
                {
                    $this->db->select_sum('jumlah_liter', 'jumlah') ;
                    $this->db->select_sum('harga_bbm', 'harga') ;
                    
                    $this->db->from('tb_bbm') ;

                    return $this->db->get('')->row() ;
                }


            // public function get_sumtanggal()
            //     {
            //         $this->db->select_sum('jumlah_liter1', 'jumlah_tanggal') ;
            //         $this->db->select_sum('harga_bbm1', 'harga_tanggal') ;
                    
            //         $this->db->from('tb_bbm') ;

            //         // return $this->db->get('')->row() ;
            //         return $this->db->query("SELECT sum(jumlah_liter1) AS jumlah_tanggal, sum(harga_bbm1) AS harga_tanggal FROM tb_bbm ")->row() ;
            //     }


            public function get_jumlahsum()
                {
                    return $this->db->query("SELECT sum(jenis_bbm) AS bayar FROM tb_bbm ")->row() ;
                    
                    $this->db->from('tb_bbm') ;

                    return $this->db->get('')->row() ;
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
                    $query = $this->db->get_where('tb_bbm', array('id' => $id))->row();
                    return $query ;
                }

            public function get_keyword($keyword)
                {
                    $this->db->select('*') ;
                    $this->db->from('tb_bbm') ;
                    
                    $this->db->like('nama', $keyword) ;
                    $this->db->or_like('no_pol', $keyword) ;
                    $this->db->or_like('jenis_bbm', $keyword) ;
                    $this->db->or_like('jumlah_liter', $keyword) ;
                    $this->db->or_like('harga_bbm', $keyword) ;
                    $this->db->or_like('tanggal', $keyword) ;
                    return $this->db->get()->result() ;
                }

            function gettahun()
                {
                    $query = $this->db->query(" SELECT YEAR(tanggal) AS tahun FROM tb_bbm
                        GROUP BY YEAR(tanggal) ORDER by YEAR(tanggal) ASC") ;

                    return $query->result() ;
                }

            function filterbytanggal($tanggalawal, $tanggalakhir)
                {
                    $query = $this->db->query(" SELECT * FROM tb_bbm WHERE tanggal BETWEEN '$tanggalawal'
                    AND '$tanggalakhir' ORDER BY tanggal ASC ") ;

                    return $query->result() ;
                }

            function filterbybulan($tahun1, $bulanawal, $bulanakhir)
                {
                    $query = $this->db->query(" SELECT * FROM tb_bbm WHERE YEAR(tanggal) = '$tahun1' AND MONTH(tanggal)
                    BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY tanggal ASC ") ;

                    return $query->result() ;
                }

            function filterbytahun($tahun2)
                {
                    $query = $this->db->query(" SELECT * FROM tb_bbm where YEAR(tanggal) = '$tahun2' ORDER BY tanggal ASC ") ;

                    return $query->result() ;
                }
        }