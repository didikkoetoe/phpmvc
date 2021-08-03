<?php

class Programmer_model
{
    private $dbh; //database handler
    private $stmt;

    public function __construct()
    {
        // database source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllPrg()
    {
        $this->stmt = $this->dbh->prepare("SELECT * FROM programmer");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
