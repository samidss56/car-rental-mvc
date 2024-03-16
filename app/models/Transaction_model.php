<?php

class Transaction_model
{
    private $table = 'master_tipe_pembayaran';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
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

}