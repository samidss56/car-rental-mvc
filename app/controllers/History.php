<?php
require_once "../app/core/Controller.php";

class History extends Controller
{
    public function index()
    {
        $data["judul"] = "History";
        $data['history'] = $this->model('History_model')->getAllHistory();
        $this->view("templates/header", $data);
        $this->view("history/index", $data);
        $this->view("templates/footer", $data);
    }
}
