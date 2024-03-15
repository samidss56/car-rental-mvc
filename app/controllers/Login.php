<?php
require_once "../app/core/Controller.php";

class Login extends Controller
{
    public function index()
    {
        $data["judul"] = "Login";
        $this->view("login/index", $data);
    }

    public function login()
    {

        if ($_POST['username'] == null || $_POST['password'] == null) {
            header('Location: ' . BASE_URL . '/login');
        }
        // Mendapatkan hasil autentikasi dari model
        $auth_result = $this->model('Login_model')->cekAuth($_POST);

        // Memeriksa hasil autentikasi
        if ($auth_result[0] === 'success') {
            // Jika autentikasi berhasil, arahkan ke halaman dashboard
            header('Location:' . BASE_URL . '/dashboard');
            exit;
        } else {
            // Jika autentikasi gagal, arahkan kembali ke halaman login dengan pesan kesalahan
            $data["judul"] = "Login";
            $data["error_message"] = $auth_result[1];
            $this->view("login/index", $data);
        }
    }

    public function logout()
    {
        header("Location:" . BASE_URL);
        exit();
    }
}