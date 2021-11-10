<?php
namespace Muppets\Classes;

class MuppetEntity
{
    protected int $id;
    protected string $name;
    protected int $debut_year;
    protected int $mayhem;
    protected int $glamour;
    protected int $humour;
    protected int $hall_of_fame;
    protected string $img_url;

    public function getId() : int
    {
        return $this->id;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getDebutYear() : int
    {
        return $this->debut_year;
    }

    public function getMayhem() : int
    {
        return $this->mayhem;
    }

    public function getGlamour() : int
    {
        return $this->glamour;
    }

    public function getHumour() : int
    {
        return $this->humour;
    }

    public function getHallOfFame() : int
    {
        return $this->hall_of_fame;
    }

    public function getImgUrl() : string
    {
        return $this->img_url;
    }
}