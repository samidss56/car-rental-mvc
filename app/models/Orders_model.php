<?php

class Orders_model
{

    private $table = 'master_pesanan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProsesOrders()
    {
        $this->db->query(
            "SELECT 
            mp.pesanan_id,
            mu.nama_user,
            mm.nama_mobil,
            mm.link_gambar_mobil,
            mp.tanggal_pemesanan,
            mp.tanggal_akhir,
            mp.status_pesanan,
            mp.total
        FROM 
            master_pesanan mp
        JOIN 
            master_user mu ON mp.user_id = mu.user_id
        JOIN 
            master_mobil mm ON mp.mobil_id = mm.mobil_id
        WHERE 
            mp.status_pesanan = 'Proses';
        "
        );
        return $this->db->resultAll();
    }


    public function create($data)
    {
        $query = "INSERT INTO " . $this->table . " (user_id, mobil_id, tipe_pembayaran_id, tanggal_pemesanan, tanggal_akhir,  status_pesanan, total) 
        VALUES (:user_id, :mobil_id, :tipe_pembayaran_id, :tanggal_pemesanan, :tanggal_akhir, :status_pesanan, :total)";
        try {
            $this->db->query($query);
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':mobil_id', $data['id_mobil']);
            $this->db->bind(':tipe_pembayaran_id', $data['tipe_pembayaran']);
            $this->db->bind(':tanggal_pemesanan', $data['tanggal_pemesanan']);
            $this->db->bind(':tanggal_akhir', $data['tanggal_akhir']);
            $this->db->bind(':status_pesanan', $data['status_pesanan']);
            $this->db->bind(':total', $data['total']);
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return -1;
        }
    }


    public function updateStatus($id)
    {
        $query = "UPDATE {$this->table}  SET status_pesanan = :status_pesanan WHERE pesanan_id = :pesanan_id";
        try {
            $this->db->query($query);
            $this->db->bind(':pesanan_id', $id);
            $this->db->bind(':status_pesanan', "Selesai");
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return -1;
        }
    }
}
