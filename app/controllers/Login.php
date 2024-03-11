<?php
require_once "../app/core/Controller.php";

class Login extends Controller
{
    public function index()
    {
        $data["judul"] = "Login";
        $this->view("login/index", $data);
    }
}