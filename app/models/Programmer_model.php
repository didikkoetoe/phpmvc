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

    public function getPrgById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPrg($data)
    {
        $query = "INSERT INTO programmer VALUES
        ('', :nama , :email , :alamat , :umur)";

        $this->db->query($query);
        $this->db->bind('nama', $data["nama"]);
        $this->db->bind('email', $data["email"]);
        $this->db->bind('alamat', $data["alamat"]);
        $this->db->bind('umur', $data["umur"]);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
