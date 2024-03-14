<?php
require_once "../app/core/Controller.php";

class Payment_method extends Controller
{
    public function index()
    {
        $data["judul"] = "Payment Method";
        $this->view("templates/header", $data);
        $this->view("payment_method/index", $data);
        $this->view("templates/footer", $data);
    }
}
