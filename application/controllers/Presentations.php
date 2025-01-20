<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Presentations extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this -> load -> model('Presentation');
            $this -> load -> model('User');
        }

        public function index(){
            $data['presentations'] = $this -> Presentation -> getData();
            $data['users'] = $this -> User -> queryForIdUser(2);

            $this -> load -> view('header');
            $this -> load -> view('Presentations/index', $data);
            $this -> load -> view('footer');
        }

        /*public function save(){
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

        public function getRegisterById($id){
            $data['festival'] = $this -> Festival -> queryForId($id);
            $data['users'] = $this -> Festival -> queryForIdUser(2);

            $this -> load -> view('header');
            $this -> load -> view('Festivals/updateFestivals', $data);
            $this -> load -> view('footer');
        }

        public function update(){
            $data = array(
                'name' => $this -> input -> POST('name'),
                'address' => $this -> input -> POST('address'),
                'startDate' => $this -> input -> POST('startDate'),
                'endDate' => $this -> input -> POST('endDate'),
                'description' => $this -> input -> POST('descripction'),
                'user_id' => $this -> input -> POST('user')
            );

            $id = $this-> input -> POST('id');

            $this -> Festival -> update($data, $id);
            redirect('Festivals/index');
        }

        public function delete($id){
            if ($this -> Festival -> delete($id)){
                redirect('Festivals/index');
            }
            else{
                echo "Error al eliminar";
            }
        }*/
    }
?>