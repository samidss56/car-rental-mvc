<?php
require_once "../app/core/Controller.php";

class Orders extends Controller
{
    public function index()
    {

        $dataOrderan = $this->model("Orders_model")->getAllProsesOrders();
        $data['order'] = $dataOrderan;
        $data["judul"] = "Orders";
        $this->view("templates/header", $data);
        $this->view("orders/index", $data);
        $this->view("templates/footer", $data);
    }

    public function tambahOrder()
    {
        if (
            !isset($_POST['nama_user']) ||
            !isset($_POST['alamat']) ||
            !isset($_POST['nomor_telepon']) ||
            !isset($_POST['email']) ||
            !isset($_POST['id_mobil']) ||
            !isset($_POST['tipe_pembayaran'])
        ) {
            Flasher::setFlash('', 'Tidak Lengkap', 'danger');
            header('Location: ' . BASE_URL . '/cars');
            exit;
        }

        $tanggalMulaiSewa = $_POST['tanggal_pemesanan'];
        $tanggalAkhirSewa = $_POST['tanggal_akhir'];

        $tanggalMulaiSewaTimestamp = strtotime($tanggalMulaiSewa);
        $tanggalAkhirSewaTimestamp = strtotime($tanggalAkhirSewa);

        $selisihHari = ($tanggalAkhirSewaTimestamp - $tanggalMulaiSewaTimestamp) / (60 * 60 * 24);
        $getHarga = $this->model('Cars_model')->getHargaMobil($_POST['id_mobil'])['harga_sewa_per_hari'];
        $_POST['total'] = $getHarga * $selisihHari;


        $tambah_user = $this->model('Users_model')->create($_POST);
        $data_user = $this->model('Users_model')->getLastDataEntered();

        $_POST['user_id'] = $data_user['user_id'];
        $_POST['status_pesanan'] = 'Proses';

        if ($tambah_user) {

            $tambah_orderan = $this->model('Orders_model')->create($_POST);

            if ($tambah_orderan) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location:' . BASE_URL . '/orders');
                exit;
            } else {
                Flasher::setFlash('gagal', 'fitambahkan', 'danger');
                header('Location:' . BASE_URL . '/orders');
                exit;
            }
        } else {
            Flasher::setFlash('user gagal', 'ditambahkan', 'danger');
            header('Location:' . BASE_URL . '/cars');
            exit;
        }
    }

    public function ubahStatus()
    {
        if (
            !isset($_POST['pesanan_id'])
        ) {
            Flasher::setFlash('', 'id gaada', 'danger');
            header('Location: ' . BASE_URL . '/cars');
            exit;
        }
        $ubahStatus = $this->model('Orders_model')->updateStatus($_POST['pesanan_id']);

        if ($ubahStatus) {
            $tambahRiwayat = $this->model('History_model')->addHistory($_POST);
            if ($tambahRiwayat) {

                Flasher::setFlash('berhasil', 'diubah', 'success');
                header('Location:' . BASE_URL . '/history');
                exit;
            } else {

                Flasher::setFlash('gagal', 'diubah', 'danger');
                header('Location:' . BASE_URL . '/orders');
                exit;
            }
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location:' . BASE_URL . '/orders');
            exit;
        }
    }
}
