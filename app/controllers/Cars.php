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
            !isset ($_POST['nama_mobil']) ||
            !isset ($_POST['jenis_mobil']) ||
            !isset ($_POST['tahun_pembuatan']) ||
            !isset ($_POST['plat_nomor']) ||
            !isset ($_POST['harga_sewa_per_hari'])
        ) {
            Flasher::setFlash('', 'Tidak Lengkap', 'danger');
            header('Location: ' . BASE_URL . '/cars');
            exit; // Pastikan untuk keluar dari skrip setelah me-redirect
        }
        // Cek apakah file gambar diunggah dengan benar
        if (isset ($_FILES['link_gambar_mobil'])) {
            $file_name = $_FILES['link_gambar_mobil']['name'];
            $file_tmp = $_FILES['link_gambar_mobil']['tmp_name'];

            // Tentukan path tujuan untuk menyimpan gambar
            $destination = $_SERVER['DOCUMENT_ROOT'] . '/car-rental-mvc/app/assets/cars/' . $file_name;

            // Pindahkan file gambar ke folder tujuan
            if (move_uploaded_file($file_tmp, $destination)) {
                // Jika berhasil, lanjutkan proses tambah data mobil
                $_POST['link_gambar_mobil'] = $file_name;


                $tambahDataMobil = $this->model('Cars_model')->addCar($_POST);

                if ($tambahDataMobil) {
                    //Jika berhasil, arahkan ke halaman Cars
                    Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                    header('Location:' . BASE_URL . '/cars');
                    exit;
                } else {
                    // Jika autentikasi gagal, arahkan kembali ke halaman login dengan pesan kesalahan
                    Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                    header('Location:' . BASE_URL . '/cars');
                    exit;
                }
            } else {
                // Jika gagal, tampilkan pesan kesalahan atau tangani sesuai kebutuhan Anda
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
            !isset ($_POST['mobil_id']) ||
            !isset ($_POST['nama_mobil']) ||
            !isset ($_POST['jenis_mobil']) ||
            !isset ($_POST['tahun_pembuatan']) ||
            !isset ($_POST['plat_nomor']) ||
            !isset ($_POST['harga_sewa_per_hari'])
        ) {
            header('Location: ' . BASE_URL . '/cars');
            exit; // Pastikan untuk keluar dari skrip setelah me-redirect
        }

        // Ambil data gambar lama
        $dataGetGambar = $this->model('Cars_model')->getFileNameById($_POST['mobil_id']);
        $getFileName = isset ($dataGetGambar['link_gambar_mobil']) ? $dataGetGambar['link_gambar_mobil'] : null;

        // Tentukan direktori gambar
        $imageDirectory = $_SERVER['DOCUMENT_ROOT'] . '/car-rental-mvc/app/assets/cars/';

        // Jika ada file gambar yang diupload
        if (!empty ($_FILES['link_gambar_mobil']['name'])) {
            $file_name = $_FILES['link_gambar_mobil']['name'];
            $file_tmp = $_FILES['link_gambar_mobil']['tmp_name'];

            // Pindahkan file gambar ke folder tujuan
            if (move_uploaded_file($file_tmp, $imageDirectory . $file_name)) {
                // Hapus gambar lama jika ada
                if ($getFileName) {
                    unlink($imageDirectory . $getFileName);
                }
                $_POST['link_gambar_mobil'] = $file_name;
            } else {
                // Jika gagal mengunggah gambar, gunakan gambar lama
                $_POST['link_gambar_mobil'] = $getFileName;
            }
        } else {
            // Jika tidak ada file gambar yang diupload, gunakan gambar lama
            $_POST['link_gambar_mobil'] = $getFileName;
        }

        // Update data mobil
        $updateDataMobil = $this->model('Cars_model')->editCar($_POST);

        if ($updateDataMobil) {
            // Jika berhasil, arahkan ke halaman dashboard dengan pesan sukses
            Flasher::setFlash('berhasil', 'diperbarui', 'success');
            header('Location:' . BASE_URL . '/cars');
            exit;
        } else {
            // Jika gagal, arahkan kembali ke halaman cars dengan pesan kesalahan
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
