<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Festivals extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this -> load -> model('Festival');
        }

        public function index(){
            $data['festivals'] = $this -> Festival -> getData();
            $data['users'] = $this -> Festival -> queryForIdUser(3);

            $this -> load -> view('header');
            $this -> load -> view('Festivals/index', $data);
            $this -> load -> view('footer');
        }

        public function save(){
            $data = array(
                'name' => $this -> input -> POST('name'),
                'address' => $this -> input -> POST('address'),
                'startDate' => $this -> input -> POST('startDate'),
                'endDate' => $this -> input -> POST('endDate'),
                'description' => $this -> input -> POST('descripction'),
                'user_id' => $this -> input -> POST('user')
            );	 	 	 	 	 	
            $this -> Festival -> insert($data);
            redirect('Festivals/index');
        }

        /*public function getRegisterById($id){
            $data['user'] = $this -> User -> queryForId($id);

            $this -> load -> view('header');
            $this -> load -> view('Users/updateUser', $data);
            $this -> load -> view('footer');
        }

        public function update(){
            $data = array(
                'ci' => $this -> input -> POST('ci'),
                'name' => $this -> input -> POST('name'),
                'last_name' => $this -> input -> POST('lastName'),
                'birthdate' => $this -> input -> POST('birthdate'),
                'email' => $this -> input -> POST('email'),
                'password' => $this -> input -> POST('password'),
                'type_user_id' => $this -> input -> POST('type_user')
            );

            $id = $this-> input -> POST('id');

            $this -> User -> update($data, $id);
            redirect('Users/index');
        }

        public function delete($id){
            if ($this -> User -> delete($id)){
                redirect('Users/index');
            }
            else{
                echo "Error al eliminar";
            }
        }*/
    }
?>