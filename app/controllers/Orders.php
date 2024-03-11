<?php
require_once "../app/core/Controller.php";

class Orders extends Controller
{
    public function index()
    {
        $data["judul"] = "Orders";
        $this->view("templates/header", $data);
        $this->view("orders/index", $data);
        $this->view("templates/footer", $data);
    }
}