<?php
    class  M_medik2 extends CI_Model 
        {
            public function tampil_data()
                {
                    return $this->db->get('tb_medik2');
                }

            public function get_data($limit, $start, $keyword = null)
                {
                    if ($keyword) {
                        $this->db->like('tanggal', $keyword) ;
                        $this->db->or_like('penggunaan', $keyword) ;
                        $this->db->or_like('dimensi', $keyword) ;
                        $this->db->or_like('nama_obat', $keyword) ;
                        $this->db->or_like('satuan', $keyword) ;
                        $this->db->or_like('jumlah', $keyword) ;
                        $this->db->or_like('kondisi', $keyword) ;
                        $this->db->or_like('keterangan', $keyword) ;
                    }
                    return $this->db->get('tb_medik2', $limit, $start)->result_array() ;
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
                    $query = $this->db->get_where('tb_medik2', array('id' => $id))->row();
                    return $query ;
                }

            public function get_keyword($keyword)
                {
                    $this->db->select('*') ;
                    $this->db->from('tb_medik2') ;

                    $this->db->like('tanggal', $keyword) ;
                    $this->db->or_like('penggunaan', $keyword) ;
                    $this->db->or_like('dimensi', $keyword) ;
                    $this->db->or_like('nama_obat', $keyword) ;
                    $this->db->or_like('satuan', $keyword) ;
                    $this->db->or_like('jumlah', $keyword) ;
                    $this->db->or_like('kondisi', $keyword) ;
                    $this->db->or_like('keterangan', $keyword) ;

                    return $this->db->get()->result() ;
                }

            function gettahun()
                {
                    $query = $this->db->query(" SELECT YEAR(tanggal) AS tahun FROM tb_medik2
                        GROUP BY YEAR(tanggal) ORDER by YEAR(tanggal) ASC") ;

                    return $query->result() ;
                }

            function filterbytanggal($tanggalawal, $tanggalakhir)
                {
                    $query = $this->db->query(" SELECT * FROM tb_medik2 where tanggal BETWEEN '$tanggalawal'
                    and '$tanggalakhir' ORDER BY tanggal ASC ") ;

                    return $query->result() ;
                }

            function filterbybulan($tahun1, $bulanawal, $bulanakhir)
                {
                    $query = $this->db->query(" SELECT * FROM tb_medik2 where YEAR(tanggal) = '$tahun1' and MONTH(tanggal)
                    BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY tanggal ASC ") ;

                    return $query->result() ;
                }

            function filterbytahun($tahun2)
                {
                    $query = $this->db->query(" SELECT * FROM tb_medik2 where YEAR(tanggal) = '$tahun2' ORDER BY tanggal ASC ") ;

                    return $query->result() ;
                }
        }