<?php

class Users_model
{

    private $table = 'master_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUsers()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }

    public function create($data)
    {
        $query = "INSERT INTO {$this->table} (nama_user, alamat, nomor_telepon, email) 
        VALUES (:nama_user, :alamat, :nomor_telepon, :email)";
        try {
            $this->db->query($query);
            $this->db->bind(':nama_user', $data['nama_user']);
            $this->db->bind(':alamat', $data['alamat']);
            $this->db->bind(':nomor_telepon', $data['nomor_telepon']);
            $this->db->bind(':email', $data['email']);
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return -1;
        }
    }

    public function getLastDataEntered()
    {
        $query = "SELECT * FROM {$this->table} ORDER BY user_id DESC LIMIT 1";
        try {
            $this->db->query($query);
            return $this->db->resultSingle();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return -1;
        }
    }

}