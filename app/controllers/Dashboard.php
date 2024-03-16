<?php
require_once "../app/core/Controller.php";

class Dashboard extends Controller
{
    public function index()
    {
        $data["judul"] = "Dashboard";
        $data["jumlah_mobil"] = $this->model('Cars_model')->getNumberOfCars()['total_data'];
        $data['mobil'] = $this->model('Cars_model')->getNameOfCars();
        $data["jumlah_user"] = $this->model('Users_model')->getNumberOfUsers()["total_data"];
        $data["transaksi"] = $this->model("History_model")->getTotalTransaksi()["total_data"];
        $data['metode_pembayaran'] = $this->model('Payment_method_model')->getAllMethod();

        $this->view("templates/header", $data);
        $this->view("dashboard/index", $data);
        $this->view("templates/footer", $data);
    }
}
