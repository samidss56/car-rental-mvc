<?php
require_once "../app/core/Controller.php";

class Cars extends Controller
{
    public function index()
    {
        $data["judul"] = "Cars";
        $data["mobil"] = $this->model('Cars_model')->getAllCar();
        $this->view("templates/header", $data);
        $this->view("cars/index", $data);
        $this->view("templates/footer", $data);
    }

    public function tambahMobil()
    {
        if (
            !isset($_POST['nama_mobil']) ||
            !isset($_POST['jenis_mobil']) ||
            !isset($_POST['tahun_pembuatan']) ||
            !isset($_POST['plat_nomor']) ||
            !isset($_POST['harga_sewa_per_hari'])
        ) {
            Flasher::setFlash('', 'Tidak Lengkap', 'danger');
            header('Location: ' . BASE_URL . '/cars');
            exit;
        }
        // Cek apakah file gambar diunggah dengan benar
        if (isset($_FILES['link_gambar_mobil'])) {
            $file_name = $_FILES['link_gambar_mobil']['name'];
            $file_tmp = $_FILES['link_gambar_mobil']['tmp_name'];

            $destination = $_SERVER['DOCUMENT_ROOT'] . '/car-rental-mvc/app/assets/cars/' . $file_name;

            if (move_uploaded_file($file_tmp, $destination)) {
                $_POST['link_gambar_mobil'] = $file_name;


                $tambahDataMobil = $this->model('Cars_model')->addCar($_POST);

                if ($tambahDataMobil) {
                    Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                    header('Location:' . BASE_URL . '/cars');
                    exit;
                } else {
                    Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                    header('Location:' . BASE_URL . '/cars');
                    exit;
                }
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location:' . BASE_URL . '/cars');
                exit;
            }
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:' . BASE_URL . '/cars');
            exit;
        }
    }

    public function updateMobil()
    {
        if (
            !isset($_POST['mobil_id']) ||
            !isset($_POST['nama_mobil']) ||
            !isset($_POST['jenis_mobil']) ||
            !isset($_POST['tahun_pembuatan']) ||
            !isset($_POST['plat_nomor']) ||
            !isset($_POST['harga_sewa_per_hari'])
        ) {
            header('Location: ' . BASE_URL . '/cars');
            exit;
        }

        // Ambil data gambar lama
        $dataGetGambar = $this->model('Cars_model')->getFileNameById($_POST['mobil_id']);
        $getFileName = isset($dataGetGambar['link_gambar_mobil']) ? $dataGetGambar['link_gambar_mobil'] : null;

        // Tentukan direktori gambar
        $imageDirectory = $_SERVER['DOCUMENT_ROOT'] . '/car-rental-mvc/app/assets/cars/';

        if (!empty($_FILES['link_gambar_mobil']['name'])) {
            $file_name = $_FILES['link_gambar_mobil']['name'];
            $file_tmp = $_FILES['link_gambar_mobil']['tmp_name'];

            if (move_uploaded_file($file_tmp, $imageDirectory . $file_name)) {
                if ($getFileName) {
                    unlink($imageDirectory . $getFileName);
                }
                $_POST['link_gambar_mobil'] = $file_name;
            } else {
                $_POST['link_gambar_mobil'] = $getFileName;
            }
        } else {
            $_POST['link_gambar_mobil'] = $getFileName;
        }

        $updateDataMobil = $this->model('Cars_model')->editCar($_POST);

        if ($updateDataMobil) {
            Flasher::setFlash('berhasil', 'diperbarui', 'success');
            header('Location:' . BASE_URL . '/cars');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diperbarui', 'danger');
            header('Location:' . BASE_URL . '/cars');
            exit;
        }
    }

    public function deleteMobil()
    {
        $deleteDataMobil = $this->model('Cars_model')->deleteCar($_POST['mobil_id']);
        if ($deleteDataMobil) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:' . BASE_URL . '/cars');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:' . BASE_URL . '/cars');
            exit;
        }
    }
}
