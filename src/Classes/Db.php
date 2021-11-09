<?php
namespace 2021-aug-oopMuppets\Classes;

class Db
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=db: db name=muppets', 'root:', 'password');
    }
    public function getDb(): PDO{
        return $this->db;
    }
}

