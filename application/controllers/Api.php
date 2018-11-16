<?php
class Api extends CI_Controller
{
    protected $user = [] ;
    public function index()
    {
        echo "index of Api";
    }

    public function getAll()
    {
        $param = $_POST;
        $as = $this->db->select("*")->from("address")->get()->row();
        echo json_encode($as);
        var_dump($param)    ;
    }

    public function get(){
        $user = require_once("userarray.php");
    }
}
?>