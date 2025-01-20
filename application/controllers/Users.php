<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Users extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this -> load -> model('User');
        }

        public function index(){
            $data['users'] = $this -> User -> getData();

            $this -> load -> view('header');
            $this -> load -> view('Users/index', $data);
            $this -> load -> view('footer');
        }


    }
?>