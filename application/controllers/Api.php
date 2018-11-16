<?php
class Api extends CI_Controller
{
    public function index()
    {
        echo "index of Api";
    }

    public function get()
    {
        $param = $_POST;
        $as = $this->db->select("*")->from("address")->get()->row();
        echo json_encode($as);
        var_dump($param)    ;
    }

    public function getAll(){
        $param = $_;
    }
}
?>