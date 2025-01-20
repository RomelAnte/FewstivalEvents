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

        public function save(){
            $data = array(
                'ci' => $this -> input -> POST('ci'),
                'name' => $this -> input -> POST('name'),
                'last_name' => $this -> input -> POST('lastName'),
                'birthdate' => $this -> input -> POST('birthdate'),
                'email' => $this -> input -> POST('email'),
                'password' => $this -> input -> POST('password'),
                'type_user_id' => $this -> input -> POST('type_user')
            );

            $this -> User -> insert($data);
            redirect('Users/index');
        }

        public function getRegisterById($id){
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
        }
    }
?>