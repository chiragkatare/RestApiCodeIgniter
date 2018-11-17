<?php
defined('BASEPATH') or exit('No direct script access allowed');

// set_error_handler(function ($errno, $errstr, $error_file, $error_line) {
//     echo "$error_line";
//    // echo "Error: [$errno] $errstr - $error_file:$error_line \n";
//     //echo "Terminating!!!!!!!!!\n";

//     die();
// });
class Api extends CI_Controller

{
    protected $user = [];
    public function index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $this->get();
        } elseif ($_SERVER["REQUEST_METHOD"] == "PUT") {
            $this->editUser();
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->addUser();
        } elseif ($_SERVER["REQUEST_METHOD"] == "DELETE") {
        }
    }

    public function get($userid = null)
    {
        $query = "SELECT * FROM address";
        if ($userid !== null) {
            $query .= " WHERE id = $userid";
        }
        $this->queryrun($query);
    }

    public function AddUser()
    {
        $newdetails = $_POST;
        $details = require_once("userarray.php");
        foreach ($newdetails as $key => $value) {
            if (array_key_exists($key, $details)) {
                $details[$key] = $value;
            }
        }
        $query = "INSERT INTO  address (fname,lname,mob) VALUES('" . $details["fname"] . "','" . $details["lname"] . "'," . $details["mob"] . ")";
        $this->queryrun($query);

    }

    public function editUser()
    {
        parse_str(file_get_contents("php://input"), $_PUT);
        if (array_key_exists("id", $_PUT)) {
            $details = require_once("userarray.php");
            foreach ($_PUT as $key => $value) {
                if (array_key_exists($key, $details)) {
                    $details[$key] = $value;
                }
            }
            $query = "UPDATE address SET ";
            foreach ($details as $key => $value) {
                if ($value !== null) {
                    if (is_string($value)) {
                        $query .= "$key = '$value',";
                    } else {
                        $query .= "$key = $value,";
                    }
                }
            }
            $query = substr($query, 0, -1) . " WHERE id = " . $details["id"];
            $this->queryrun($query);
        //   $this->db->db_debud = FALSE ;
        //   $this->db->query($query);
        //   echo $this->db->error();
        }
    }

    public function deleteUser()
    {
        parse_str(file_get_contents("php://input"), $_PUT);
    }

    public function response($code, $body = "")
    {
        $error = [200 => "sucess",400=>'failed'];
    }

    public function queryrun($query)
    {
        if (!($res=$this->db->query($query))) {
            $error = $this->db->error(); // Has keys 'code' and 'message'
            echo $error["message"];
        }
        else{
            //$res->result; 
            echo json_encode(array("status"=>200,"message"=>$res->result()), JSON_PRETTY_PRINT);
        }
    }



}
?>