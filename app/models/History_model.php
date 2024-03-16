<?php

class history_model
{
    private $table = 'master_riwayat_transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllHistory()
    {
        $this->db->query("
        SELECT 
            mu.nama_user,
            mm.nama_mobil,
            mm.harga_sewa_per_hari,
            mm.link_gambar_mobil,
            mp.tanggal_pemesanan,
            mp.tanggal_akhir,
            mrt.tanggal_transaksi,
            mrt.status_pembayaran,
            mp.total
        FROM 
            master_riwayat_transaksi mrt
        JOIN 
            master_pesanan mp ON mrt.pesanan_id = mp.pesanan_id
        JOIN 
            master_user mu ON mp.user_id = mu.user_id
        JOIN
            master_mobil mm ON mp.mobil_id = mm.mobil_id
    ");

        return $this->db->resultAll();
    }


    public function addHistory($data)
    {
        date_default_timezone_set('Asia/Jakarta');
        $query = "INSERT INTO {$this->table} (pesanan_id, tanggal_transaksi, status_pembayaran) 
        VALUES (:pesanan_id, :tanggal_transaksi, :status_pembayaran)";
        try {
            $this->db->query($query);
            $this->db->bind(':pesanan_id', $data['pesanan_id']);
            $this->db->bind(':tanggal_transaksi', date('Y-m-d'));
            $this->db->bind(':status_pembayaran', 'Lunas');
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return -1;
        }
    }

    public function getTotalTransaksi()
    {
        $query = "SELECT SUM(mp.total) AS total_data  FROM 
        master_riwayat_transaksi mrt
    JOIN 
        master_pesanan mp ON mrt.pesanan_id = mp.pesanan_id
    JOIN 
        master_user mu ON mp.user_id = mu.user_id
    JOIN
        master_mobil mm ON mp.mobil_id = mm.mobil_id";

        try {
            $this->db->query($query);
            return $this->db->resultSingle();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return -1;
        }
    }
}
