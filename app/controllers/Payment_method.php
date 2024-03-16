<?php
require_once "../app/core/Controller.php";

class Payment_method extends Controller
{
    public function index()
    {
        $data["judul"] = "Payment Method";
        $data["transaksi"] = $this->model('Payment_method_model')->getAllTransaksi();
        $this->view("templates/header", $data);
        $this->view("payment_method/index", $data);
        $this->view("templates/footer", $data);
    }

    public function tambahTransaksi()
    {
        if (
            $_POST["tipe_pembayaran"] == null || $_POST["kategori_tipe_pembayaran"] == null
        ) {
            header('Location: ' . BASE_URL . '/payment_method');
            exit;
        }
        $tambahDataTransaksi = $this->model('Payment_method_model')->addTransaksi($_POST);

        if ($tambahDataTransaksi) {
            header('Location: ' . BASE_URL . '/payment_method');
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            exit;
        } else {
            Flasher::setFlash('gagal', 'menambahkan', 'danger');
            header('Location:' . BASE_URL . '/cars');
            exit;
        }
    }

    public function updateTransaksi()
    {

        if (
            $_POST["tipe_pembayaran"] == null || $_POST["kategori_tipe_pembayaran"] == null
        ) {
            header('Location: ' . BASE_URL . '/payment_method');
            exit;
        }
        $updateDataTransaksi = $this->model('Payment_method_model')->editTransaksi($_POST);

        if ($updateDataTransaksi) {
            Flasher::setFlash('berhasil', 'diperbarui', 'success');
            header('Location: ' . BASE_URL . '/payment_method');
            exit;
        } else {
            Flasher::setFlash('gagal', 'memperbarui', 'danger');
            header('Location:' . BASE_URL . '/cars');
            exit;
        }
    }

    public function hapusTransaksi()
    {

        $deleteDataTransaksi = $this->model('Payment_method_model')->deleteTransaksi($_POST['tipe_pembayaran_id']);
        if ($deleteDataTransaksi) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:' . BASE_URL . '/payment_method');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:' . BASE_URL . '/payment_method');
            exit;
        }
    }
}
