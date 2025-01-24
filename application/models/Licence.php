<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Licence extends CI_Model {
        function __construct(){
            parent::__construct();
        }

        function getData(){
            $listPresentation = $this -> db -> get('licence');
            if($listPresentation -> num_rows() > 0){
                return $listPresentation -> result();
            }
            else{
                return false;
            }
        }

        function insert($data){
            $this -> db -> insert('licence', $data);
        }

        function update($data, $id){
            $this->db->where('id_lic', $id);
            $this->db->update('licence', $data);
        }
        

        function queryForId($id){
            $this -> db -> where ('id_lic', $id);
            $users= $this -> db -> get('licence');
            if($users -> num_rows() > 0){
                return $users->row();
            }else{
                return false;
            }
        }

        function delete($id){
            $this -> db -> where ('id_lic', $id);
            return $this -> db -> delete('licence');
        }
    }
?>