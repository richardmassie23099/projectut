<?php
class  M_hak_akses extends CI_Model 
        {
            public $table = 'hak_akses' ;
            public $id = 'id' ;
            public $order = 'DESC' ;

            function __construct()
            {
                parent::__construct() ;
            }

            public function CheckUser($username, $password)
                {
                    $query = $this->db->get_where($this->table,
                        array('username' => $username,
                            'password' => $password)
                    ) ;

                    if ($query->num_rows() > 0) {
                        return true ;
                    } else {
                        return false ;
                    }
                }

            function get_all_by_username($username)
            {
                $this->db->where('username', $username);
                return $this->db->get($this->table)->row() ;
            }

        }
