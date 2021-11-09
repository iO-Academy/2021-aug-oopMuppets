<?php
namespace Muppets\Classes;

class Muppets
{

    public int $id;
    public string $name;
    public int $debut_year;
    public int $mayhem;
    public int $glamour;
    public int $humour;
    public int $hall_of_fame;
    public string $img_url;


    public function getid()
    {
        return $this->id;
    }

    public function getname()
    {
        return $this->name;
    }

    public function getdebut_year()
    {
        return $this->debut_year;
    }

    public function getmayhem()
    {
        return $this->mayhem;
    }

    public function getglamour()
    {
        return $this->glamour;
    }

    public function gethumour()
    {
        return $this->humour;
    }

    public function gethall_of_fame()
    {
        return $this->hall_of_fame;
    }

    public function getimg_url()
    {
        return $this->img_url;
    }
}