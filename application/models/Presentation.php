<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Presentation extends CI_Model {
        function __construct(){
            parent::__construct();
        }

        function getData(){
            $listPresentation = $this -> db -> get('presentation');
            if($listPresentation -> num_rows() > 0){
                return $listPresentation -> result();
            }
            else{
                return false;
            }
        }

        function insert($data){
            $this -> db -> insert('presentation', $data);
        }

        function update($data, $id){
            $this->db->where('id_use', $id);
            $this->db->update('user', $data);
        }
        

        function queryForId($id){
            $this -> db -> where ('id_prese', $id);
            $users= $this -> db -> get('presentation');
            if($users -> num_rows() > 0){
                return $users->row();
            }else{
                return false;
            }
        }

        function delete($id){
            $this -> db -> where ('id_use', $id);
            return $this -> db -> delete('user');
        }

        /*function queryForIdUser($id){
            $this -> db -> where ('type_user_id', $id);
            $users= $this -> db -> get('user');
            if($users -> num_rows() > 0){
                return $users->result();
            }else{
                return [];
            }
        }*/
    }
?>