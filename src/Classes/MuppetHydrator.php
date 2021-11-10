<?php
namespace Muppets\Classes;

class MuppetHydrator
{
    /**
     * Queries db for all entries
     *
     * @param \PDO $db
     *
     * @return array returns an array containing all entities
     */
    public static function retrieveAll(\PDO $db)
    {
        $query = $db->prepare("SELECT `id`, `name`, `debut_year`, `mayhem`, `glamour`, `humour`, `hall_of_fame`, `img_url` FROM `characters`;");
        $query->setFetchMode(\PDO::FETCH_CLASS, MuppetEntity::class);
        $query->execute();
        return $query->fetchAll();
    }
}