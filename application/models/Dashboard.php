<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Dashboard extends CI_Model {
        function __construct(){
            parent::__construct();
        }

        function getDataById(){
            $listTypeUser = $this -> db -> get('typeuser');

            $res = array();

            foreach ($listTypeUser->result() as $type) {
                $typeId = $type -> id_type; 
                $typeName = $type -> name;
                
                $this->db->where('type_user_id', $typeId);
                $this->db->from('user'); 
                $count = $this->db->count_all_results();

                $res[] = array(
                    'name' => $typeName,
                    'count' => $count
                );
            }
    
            return $res;
        }
    }
?>