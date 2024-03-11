<?php
require_once "../app/core/Controller.php";

class Cars extends Controller
{
    public function index()
    {
        $data["judul"] = "Cars";
        $this->view("templates/header", $data);
        $this->view("cars/index", $data);
        $this->view("templates/footer", $data);
    }
}
