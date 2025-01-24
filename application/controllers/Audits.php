<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Audits extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this -> load -> model('Audit');
            $this -> load -> model('User');
            /*$this -> load -> model('Festival');*/

        }

        public function index(){
            $data['audits'] = $this -> Audit -> getData();
            $data['users'] = $this -> User -> queryForIdUser(4);

            $this -> load -> view('header');
            $this -> load -> view('Audits/index', $data);
            $this -> load -> view('footer');
        }

        public function save(){
            $data = array(                 	 	 	 	 	
                'date' => $this -> input -> POST('date'),
                'description' => $this -> input -> POST('description'),
                'gender' => $this -> input -> POST('gender'),
                'user' => $this -> input -> POST('user'),
            );	 	 	 	 	 	
            $this -> Audit -> insert($data);
            redirect('Audits/index');
        }

        public function getRegisterById($id){
            $data['audits'] = $this -> Audit -> queryForId($id);
            $data['users'] = $this -> User -> queryForIdUser(4);

            $this -> load -> view('header');
            $this -> load -> view('Audits/updateAudits', $data);
            $this -> load -> view('footer');
        }

        public function update(){
            $data = array(
                'date' => $this -> input -> POST('date'),
                'description' => $this -> input -> POST('description'),
                'gender' => $this -> input -> POST('gender'),
                'user' => $this -> input -> POST('user'),
            );

            $id = $this-> input -> POST('id');

            $this -> Audit -> update($data, $id);
            redirect('Audits/index');
        }

        public function delete($id){
            if ($this -> Audit -> delete($id)){
                redirect('Audits/index');
            }
            else{
                echo "Error al eliminar";
            }
        }
    }
?>