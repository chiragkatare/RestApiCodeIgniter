<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Database", "database");
        $this->load->helper('form');
    }

    public function index()
    {
        $this->login();
    }

    public function login()
    {
        $this->load->view("login");
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->load->view("register");
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->input->post();
            unset($data["rpassword"]);
            $this->database->insertUser($data);
        }
    }

    public function validation($data)
    {
        $this->load->library('form_validation');
        $data
    }
}
?>