<?php
    class  M_asset extends CI_Model 
        {
            public function tampil_data()
                {
                    return $this->db->get('tb_asset');
                }

            public function get_data($limit, $start, $keyword = null)
                {
                    if ($keyword) {
                        $this->db->like('nama_mhs', $keyword) ;
                        $this->db->or_like('asal_kampus', $keyword) ;
                        $this->db->or_like('jurusan', $keyword) ;
                        $this->db->or_like('masuk_pkl', $keyword) ;
                        $this->db->or_like('keluar_pkl', $keyword) ;
                        $this->db->or_like('no_telp', $keyword) ;
                        $this->db->or_like('alamat', $keyword) ;
                        $this->db->or_like('email', $keyword) ;
                    }
                    return $this->db->get('tb_asset', $limit, $start)->result_array() ;
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
                    $query = $this->db->get_where('tb_asset', array('id' => $id))->row();
                    return $query ;
                }

            public function get_keyword($keyword)
                {
                    $this->db->select('*') ;
                    $this->db->from('tb_asset') ;
                    
                    $this->db->like('nama_mhs', $keyword) ;
                    $this->db->or_like('asal_kampus', $keyword) ;
                    $this->db->or_like('masuk_pkl', $keyword) ;
                    $this->db->or_like('keluar_pkl', $keyword) ;
                    $this->db->or_like('no_telp', $keyword) ;
                    $this->db->or_like('alamat', $keyword) ;
                    $this->db->or_like('jurusan', $keyword) ;
                    $this->db->or_like('email', $keyword) ;
                    return $this->db->get()->result() ;
                }

        }