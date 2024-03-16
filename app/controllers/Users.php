<?php
require_once "../app/core/Controller.php";

class Users extends Controller
{
    public function index()
    {
        $data["judul"] = "Users";
        $data["user"] = $this->model('Users_model')->getAllUsers();
        $this->view("templates/header", $data);
        $this->view("users/index", $data);
        $this->view("templates/footer", $data);
    }

    public function updateUser()
    {
        if (
            $_POST["nama_user"] == null || $_POST["alamat"] == null || $_POST["nomor_telepon"] == null || $_POST["email"] == null
        ) {
            header('Location: ' . BASE_URL . '/users');
            exit;
        }
        $updateDataTransaksi = $this->model('Users_model')->editUser($_POST);

        if ($updateDataTransaksi) {
            Flasher::setFlash('berhasil', 'diperbarui', 'success');
            header('Location: ' . BASE_URL . '/users');
            exit;
        } else {
            Flasher::setFlash('gagal', 'memperbarui', 'danger');
            header('Location:' . BASE_URL . '/users');
            exit;
        }
    }
}