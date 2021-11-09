<?php
namespace 2021-aug-oopMuppets\Classes;

class MuppetHydrator
{
    public function retrieveAll(PDO $db)
    {

        $query = $db->prepare("SELECT `id`, `name`, `debut_year`, `mayhem`, `glamour`, `hall_of_fame`, `img_url` FROM `characters`;");
        $query->setFetchMode(PDO:FETCH_CLASS, Muppets:class);
        $query->exectue();
        return $query->FetchALL();
    }

}