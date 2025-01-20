<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class User extends CI_Model {
        function __construct(){
            parent::__construct();
        }

        function getData(){
            $listUser = $this -> db -> get('user');
            if($listUser -> num_rows() > 0){
                return $listUser -> result();
            }
            else{
                return false;
            }
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