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
    }
?>