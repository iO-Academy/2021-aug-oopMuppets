<?php
namespace Muppets\Classes;

class Db
{
    protected $db;

    public function __construct()
    {
        $this->db = new \PDO('mysql:host=db; dbname=muppets', 'root', 'password');
    }
    public function getDb(): \PDO
    {
        return $this->db;
    }
}

