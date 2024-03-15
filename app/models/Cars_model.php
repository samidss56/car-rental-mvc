<?php

class Cars_model
{
    private $table = 'master_mobil';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllCar()
    {
        $this->db->query("SELECT * FROM " . $this->table);

        return $this->db->resultAll();
    }


    public function addCar($data)
    {
        $query = "INSERT INTO master_mobil (nama_mobil, jenis_mobil, tahun_pembuatan, plat_nomor, harga_sewa_per_hari, link_gambar_mobil) 
        VALUES (:nama_mobil, :jenis_mobil, :tahun_pembuatan, :plat_nomor, :harga_sewa_per_hari, :link_gambar_mobil)";
        try {
            $this->db->query($query);
            $this->db->bind(':nama_mobil', $data['nama_mobil']);
            $this->db->bind(':jenis_mobil', $data['jenis_mobil']);
            $this->db->bind(':tahun_pembuatan', $data['tahun_pembuatan']);
            $this->db->bind(':plat_nomor', $data['plat_nomor']);
            $this->db->bind(':harga_sewa_per_hari', $data['harga_sewa_per_hari']);
            $this->db->bind(':link_gambar_mobil', $data['link_gambar_mobil']);
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            // Handle error here, such as logging or displaying a message
            echo "Error: " . $e->getMessage();
            return -1; // Return a failure indicator
        }
    }

    public function editCar($data)
    {

        $query = "UPDATE master_mobil SET 
                nama_mobil = :nama_mobil,
                jenis_mobil = :jenis_mobil,
                tahun_pembuatan = :tahun_pembuatan,
                plat_nomor = :plat_nomor,
                harga_sewa_per_hari = :harga_sewa_per_hari,
                link_gambar_mobil = :link_gambar_mobil
              WHERE mobil_id = :mobil_id";
        try {
            $this->db->query($query);
            $this->db->bind(':mobil_id', $data['mobil_id']);
            $this->db->bind(':nama_mobil', $data['nama_mobil']);
            $this->db->bind(':jenis_mobil', $data['jenis_mobil']);
            $this->db->bind(':tahun_pembuatan', $data['tahun_pembuatan']);
            $this->db->bind(':plat_nomor', $data['plat_nomor']);
            $this->db->bind(':harga_sewa_per_hari', $data['harga_sewa_per_hari']);
            $this->db->bind(':link_gambar_mobil', $data['link_gambar_mobil']);
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            // Handle error here, such as logging or displaying a message
            echo "Error: " . $e->getMessage();
            return -1; // Return a failure indicator
        }
    }

    public function deleteCar($id)
    {
        $query = "DELETE FROM master_mobil WHERE mobil_id = :mobil_id";
        try {
            $this->db->query($query);
            $this->db->bind(':mobil_id', $id);
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            // Handle error here, such as logging or displaying a message
            echo "Error: " . $e->getMessage();
            return -1; // Return a failure indicator
        }
    }

    public function getFileNameById($id)
    {
        $query = "SELECT link_gambar_mobil FROM master_mobil WHERE mobil_id = :mobil_id";
        try {
            $this->db->query($query);
            $this->db->bind(':mobil_id', $id);
            return $this->db->resultSingle();
        } catch (PDOException $e) {
            // Handle error here, such as logging or displaying a message
            echo "Error: " . $e->getMessage();
            return -1; // Return a failure indicator
        }
    }

    public function getNumberOfCars()
    {
        $query = 'SELECT COUNT(*) AS total_data FROM master_mobil';
        try {
            $this->db->query($query);
            return $this->db->resultSingle();
        } catch (PDOException $e) {
            // Handle error here, such as logging or displaying a message
            echo "Error: " . $e->getMessage();
            return -1; // Return a failure indicator
        }

    }

    public function getNameOfCars()
    {
        $query = 'SELECT * FROM `master_mobil`';
        try {
            $this->db->query($query);
            return $this->db->resultAll();
        } catch (PDOException $e) {
            // Handle error here, such as logging or displaying a message
            echo "Error: " . $e->getMessage();
            return -1; // Return a failure indicator
        }
    }


}
