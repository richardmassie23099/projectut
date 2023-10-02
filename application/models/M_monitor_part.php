<?php
    class  M_monitor_part extends CI_Model 
        {
            public function tampil_data()
                {
                    return $this->db->get('tb_monitor_part');
                }

            public function get_data($limit, $start, $keyword = null)
                {
                    if ($keyword) {
                        $this->db->like('tanggal', $keyword) ;
                        $this->db->or_like('part_num', $keyword) ;
                        $this->db->or_like('keterangan', $keyword) ;
                        $this->db->or_like('over', $keyword) ;
                        $this->db->or_like('short', $keyword) ;
                        $this->db->or_like('status', $keyword) ;
                        $this->db->or_like('remark', $keyword) ;
                    }
                    return $this->db->get('tb_monitor_part', $limit, $start)->result_array() ;
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
                    $query = $this->db->get_where('tb_monitor_part', array('id' => $id))->row();
                    return $query ;
                }

            public function get_keyword($keyword)
                {
                    $this->db->select('*') ;
                    $this->db->from('tb_monitor_part') ;

                    $this->db->like('name_vendor', $keyword) ;
                    $this->db->or_like('acoount_vendor', $keyword) ;
                    $this->db->or_like('no_invoice', $keyword) ;
                    $this->db->or_like('date_invoice', $keyword) ;
                    $this->db->or_like('aging_fp', $keyword) ;
                    $this->db->or_like('amount', $keyword) ;
                    $this->db->or_like('text', $keyword) ;
                    $this->db->or_like('receipt_adm', $keyword) ;
                    $this->db->or_like('receipt_user', $keyword) ;
                    $this->db->or_like('back_adm', $keyword) ;
                    $this->db->or_like('aging', $keyword) ;
                    $this->db->or_like('lt', $keyword) ;
                    $this->db->or_like('post_date', $keyword) ;
                    $this->db->or_like('lt_2', $keyword) ;
                    $this->db->or_like('doc_num', $keyword) ;
                    $this->db->or_like('tanggal', $keyword) ;
                    $this->db->or_like('status', $keyword) ;
                    $this->db->or_like('payment', $keyword) ;

                    return $this->db->get()->result() ;
                }

            function gettahun()
                {
                    $query = $this->db->query(" SELECT YEAR(tanggal) AS tahun FROM tb_monitor_part
                        GROUP BY YEAR(tanggal) ORDER by YEAR(tanggal) ASC") ;

                    return $query->result() ;
                }

            function filterbytanggal($tanggalawal, $tanggalakhir)
                {
                    $query = $this->db->query(" SELECT * FROM tb_monitor_part where tanggal BETWEEN '$tanggalawal'
                    and '$tanggalakhir' ORDER BY tanggal ASC ") ;

                    return $query->result() ;
                }

            function filterbybulan($tahun1, $bulanawal, $bulanakhir)
                {
                    $query = $this->db->query(" SELECT * FROM tb_monitor_part where YEAR(tanggal) = '$tahun1' and MONTH(tanggal)
                    BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY tanggal ASC ") ;

                    return $query->result() ;
                }

            function filterbytahun($tahun2)
                {
                    $query = $this->db->query(" SELECT * FROM tb_monitor_part where YEAR(tanggal) = '$tahun2' ORDER BY tanggal ASC ") ;

                    return $query->result() ;
                }
        }