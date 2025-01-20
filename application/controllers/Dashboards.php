<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Dashboards extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this -> load -> model('Dashboard');
        }

        public function index(){
            $data['users'] = $this -> Dashboard -> getDataById();

            $this -> load -> view('header');
            $this -> load -> view('Dashboards/index', $data);
            $this -> load -> view('footer');
        }


    }
?>