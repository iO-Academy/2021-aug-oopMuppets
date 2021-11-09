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


    public function getid() ; int
    {
        return $this->id;
    }

    public function getName() ; string
    {
        return $this->name;
    }

    public function getDebut_year() ; int
    {
        return $this->debut_year;
    }

    public function getMayhem() ; int
    {
        return $this->mayhem;
    }

    public function getGlamour() ; int
    {
        return $this->glamour;
    }

    public function getHumour() ; int
    {
        return $this->humour;
    }

    public function getHall_of_fame() ; int
    {
        return $this->hall_of_fame;
    }

    public function getImg_url() ;string
    {
        return $this->img_url;
    }
}