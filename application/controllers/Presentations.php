<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Presentations extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this -> load -> model('Presentation');
            $this -> load -> model('User');
            $this -> load -> model('Festival');

        }

        public function index(){
            $data['presentations'] = $this -> Presentation -> getData();
            $data['festivals'] = $this -> Festival -> getData();
            $data['users'] = $this -> User -> queryForIdUser(2);


            $this -> load -> view('header');
            $this -> load -> view('Presentations/index', $data);
            $this -> load -> view('footer');
        }

        public function save(){
            $hora12 = $this -> input -> POST('hour');
            $hora24 = date("H:i", strtotime($hora12));

            $data = array(                 	 	 	 	 	
                'scenery' => $this -> input -> POST('name'),
                'date' => $this->input->POST('date') . ' ' . $hora24,
                'duration' => $this -> input -> POST('duration'),
                'festival_id' => $this -> input -> POST('festival'),
                'user_id' => $this -> input -> POST('user'),
            );	 	 	 	 	 	
            $this -> Presentation -> insert($data);
            redirect('Presentations/index');
        }

        public function getRegisterById($id){
            $data['presentations'] = $this -> Presentation -> queryForId($id);
            $data['users'] = $this -> Presentation -> queryForIdUser(2);

            $this -> load -> view('header');
            $this -> load -> view('Presentations/updatePresentations', $data);
            $this -> load -> view('footer');
        }

        public function update(){
            $data = array(
                'scenery' => $this -> input -> POST('name'),
                'date' => $this->input->POST('date') . ' ' . $hora24,
                'duration' => $this -> input -> POST('duration'),
                'festival_id' => $this -> input -> POST('festival'),
                'user_id' => $this -> input -> POST('user'),
            );

            $id = $this-> input -> POST('id');

            $this -> Festival -> update($data, $id);
            redirect('Presentations/index');
        }

        public function delete($id){
            if ($this -> Festival -> delete($id)){
                redirect('Presentations/index');
            }
            else{
                echo "Error al eliminar";
            }
        }
    }
?>