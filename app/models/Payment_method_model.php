<?php

class Payment_method_model
{
    private $table = "master_tipe_pembayaran";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllTransaksi()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultAll();
    }

    public function getAllMethod()
    {
        $query = "SELECT * FROM  {$this->table}";

        try {
            $this->db->query($query);
            return $this->db->resultAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return -1;
        }
    }

    public function addTransaksi($data)
    {
        $query = "INSERT INTO $this->table (tipe_pembayaran, kategori_tipe_pembayaran, tipe_pembayaran_id) 
        VALUES (:tipe_pembayaran, :kategori_tipe_pembayaran, :tipe_pembayaran_id)";
        try {
            $this->db->query($query);
            $this->db->bind(':tipe_pembayaran_id', $data['tipe_pembayaran_id']);
            $this->db->bind(':tipe_pembayaran', $data['tipe_pembayaran']);
            $this->db->bind(':kategori_tipe_pembayaran', $data['kategori_tipe_pembayaran']);
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return -1;
        }
    }

    public function editTransaksi($data)
    {
        $query = "UPDATE $this->table SET 
            tipe_pembayaran = :tipe_pembayaran,
            kategori_tipe_pembayaran = :kategori_tipe_pembayaran
            WHERE tipe_pembayaran_id = :tipe_pembayaran_id";
        try {
            $this->db->query($query);
            $this->db->bind(':tipe_pembayaran_id', $data['tipe_pembayaran_id']);
            $this->db->bind(':tipe_pembayaran', $data['tipe_pembayaran']);
            $this->db->bind(':kategori_tipe_pembayaran', $data['kategori_tipe_pembayaran']);
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return -1;
        }
    }

    public function deleteTransaksi($id)
    {
        $query = "DELETE FROM $this->table WHERE tipe_pembayaran_id = :tipe_pembayaran_id";
        try {
            $this->db->query($query);
            $this->db->bind(':tipe_pembayaran_id', $id);
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return -1;
        }
    }
}
