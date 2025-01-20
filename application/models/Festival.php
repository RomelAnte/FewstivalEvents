<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Festival extends CI_Model {
        function __construct(){
            parent::__construct();
        }

        function getData(){
            $listFestival = $this -> db -> get('festival');
            if($listFestival -> num_rows() > 0){
                return $listFestival -> result();
            }
            else{
                return false;
            }
        }

        function insert($data){
            $this -> db -> insert('festival', $data);
        }

        function queryForIdUser($id){
            $this -> db -> where ('type_user_id', $id);
            $users= $this -> db -> get('user');
            if($users -> num_rows() > 0){
                return $users->result();
            }else{
                return [];
            }
        }

        /*function update($data, $id){
            $this->db->where('id_use', $id);
            $this->db->update('user', $data);
        }
        

        function queryForId($id){
            $this -> db -> where ('id_use', $id);
            $users= $this -> db -> get('user');
            if($users -> num_rows() > 0){
                return $users->row();
            }else{
                return false;
            }
        }

        function delete($id){
            $this -> db -> where ('id_use', $id);
            return $this -> db -> delete('user');
        }*/
    }
?>