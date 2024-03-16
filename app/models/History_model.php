<?php

class History_model
{
    private $table = 'master_transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllHistory()
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE status_transaksi = 'Selesai'");

        return $this->db->resultAll();
    }
}
