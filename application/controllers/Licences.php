<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Licences extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this -> load -> model('Licence');
        }

        public function index(){
            $data['licences'] = $this -> Licence -> getData();

            $this -> load -> view('header');
            $this -> load -> view('Licences/index', $data);
            $this -> load -> view('footer');
        }

        public function save(){
            $data = array(                 	 	 	 	 	
                'type' => $this -> input -> POST('type'),
                'cost' => $this->input->POST('cost'),
                'acronym' => $this -> input -> POST('acronym'),
            );	 	 	 	 	 	
            $this -> Licence -> insert($data);
            redirect('Licences/index');
        }

        public function getRegisterById($id){
            $data['licences'] = $this -> Licence -> queryForId($id);

            $this -> load -> view('header');
            $this -> load -> view('Licences/updateLicences', $data);
            $this -> load -> view('footer');
        }

        public function update(){
            $data = array(
                'type' => $this -> input -> POST('type'),
                'cost' => $this->input->POST('cost'),
                'acronym' => $this -> input -> POST('acronym'),
                'status' => $this -> input -> POST('status'),
            );

            $id = $this-> input -> POST('id');

            $this -> Licence -> update($data, $id);
            redirect('Licences/index');
        }

        public function delete($id){
            if ($this -> Licence -> delete($id)){
                redirect('Licences/index');
            }
            else{
                echo "Error al eliminar";
            }
        }
    }
?>