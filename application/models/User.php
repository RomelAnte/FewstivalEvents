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

        function insert($data){
            $this -> db -> insert('user', $data);
        }

        function update($data, $id){
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
        }
    }
?>