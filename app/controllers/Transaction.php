<?php
require_once "../app/core/Controller.php";

class Transaction extends Controller
{
    public function index()
    {
        $data["judul"] = "Transaction";
        $this->view("templates/header", $data);
        $this->view("transaction/index", $data);
        $this->view("templates/footer", $data);
    }
}
