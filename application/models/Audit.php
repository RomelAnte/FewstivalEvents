<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Audit extends CI_Model {
        function __construct(){
            parent::__construct();
        }

        function getData(){
            $listPresentation = $this -> db -> get('audit');
            if($listPresentation -> num_rows() > 0){
                return $listPresentation -> result();
            }
            else{
                return false;
            }
        }

        function insert($data){
            $this -> db -> insert('audit', $data);
        }

        function update($data, $id){
            $this->db->where('id_audit', $id);
            $this->db->update('audit', $data);
        }
        

        function queryForId($id){
            $this -> db -> where ('id_audit', $id);
            $users= $this -> db -> get('audit');
            if($users -> num_rows() > 0){
                return $users->row();
            }else{
                return false;
            }
        }

        function delete($id){
            $this -> db -> where ('id_audit', $id);
            return $this -> db -> delete('audit');
        }
    }
?>