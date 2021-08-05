<?php

class Programmer_model
{
    private $table = 'programmer';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPrg()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
}
