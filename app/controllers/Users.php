<?php
require_once "../app/core/Controller.php";

class Users extends Controller
{
    public function index()
    {
        $data["judul"] = "Users";
        $this->view("templates/header", $data);
        $this->view("users/index", $data);
        $this->view("templates/footer", $data);
    }
}
