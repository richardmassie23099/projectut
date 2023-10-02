<?php
    class  M_user extends CI_Model 
        {
            public function tampil_data()
                {
                    return $this->db->get('hak_akses');
                }

            public function get_data($limit, $start, $keyword = null)
                {
                    if ($keyword) {
                        $this->db->like('nama_lengkap', $keyword) ;
                        $this->db->or_like('username', $keyword) ;
                    }
                    return $this->db->get('hak_akses', $limit, $start)->result_array() ;
                    
                }

            public function countAllUser()
            {
                return $this->db->get('hak_akses')->num_rows() ;
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
        }