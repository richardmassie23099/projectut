<?php
    class M_karyawan extends CI_Model 
        {
            public function tampil_data()
                {
                    return $this->db->get('tb_karyawan');
                }

            public function get_data($limit, $start, $keyword = null)
                {
                    if ($keyword) {
                        $this->db->like('nrp', $keyword) ;
                        $this->db->or_like('nama_kry', $keyword) ;
                        $this->db->or_like('company', $keyword) ;
                        $this->db->or_like('departement', $keyword) ;
                        $this->db->or_like('posisi', $keyword) ;
                        $this->db->or_like('lokasi', $keyword) ;
                        $this->db->or_like('tempat_lahir', $keyword) ;
                        $this->db->or_like('tgl_lahir', $keyword) ;
                        $this->db->or_like('status', $keyword) ;
                        $this->db->or_like('jumlah_anak', $keyword) ;
                        $this->db->or_like('tgl_bekerja', $keyword) ;
                    }
                    return $this->db->get('tb_karyawan', $limit, $start)->result_array() ;
                }

            function input_data($data,$table)
                {
                    $this->db->insert($table,$data);
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
                    $query = $this->db->get_where('tb_karyawan', array('id' => $id))->row();
                    return $query ;
                }

            public function get_keyword($keyword)
                {
                    $this->db->select('*') ;
                    $this->db->from('tb_karyawan') ;
                    
                    $this->db->like('nrp', $keyword) ;
                    $this->db->or_like('nama_kry', $keyword) ;
                    $this->db->or_like('company', $keyword) ;
                    $this->db->or_like('departement', $keyword) ;
                    $this->db->or_like('posisi', $keyword) ;
                    $this->db->or_like('lokasi', $keyword) ;
                    $this->db->or_like('tempat_lahir', $keyword) ;
                    $this->db->or_like('tgl_lahir', $keyword) ;
                    $this->db->or_like('status', $keyword) ;
                    $this->db->or_like('jumlah_anak', $keyword) ;
                    $this->db->or_like('tgl_bekerja', $keyword) ;
                    return $this->db->get()->result() ;
                }

        }