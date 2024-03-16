<?php

class history_model
{
    private $table = 'master_riwayat_transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
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
}