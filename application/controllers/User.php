<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller {

    public function index(){
        $this->login();
    }

    public function login(){
        $this->load->view("login");
    }

    public function register(){
        $this->load->helper('form');
        $this->load->view("register");
    }

    public function show(){
        
        $data = $this->input->post();
        var_dump($data);
        // var_dump($_POST);
        
    }
}
?>