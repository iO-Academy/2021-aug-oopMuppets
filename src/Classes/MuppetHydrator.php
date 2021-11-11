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

    /**
     * queries db to return details of selected muppet
     *
     * @param \PDO $db
     * @param int $id
     *
     * @return array returns single muppet from db with the matching id from button
     */
    public static function getMuppetDetails(\PDO $db, int $id)
    {
        $query = $db->prepare("SELECT `id`, `name`, `debut_year`, `mayhem`, `glamour`, `humour`, `hall_of_fame`, `img_url` FROM `characters` WHERE `id` = :id");
        $query->setFetchMode(\PDO::FETCH_CLASS, MuppetEntity::class);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll();
    }

    public static function retrieveSearchQuery(\PDO $db, string $sanitizedSearchInput)
    {
        $query = $db->prepare("SELECT `id`, `name`, `debut_year`, `mayhem`, `glamour`, `humour`, `hall_of_fame`, `img_url` FROM `characters` WHERE `name` LIKE '%' :sanitizedSearchInput '%'");
        $query->setFetchMode(\PDO::FETCH_CLASS, MuppetEntity::class);
        $query->bindParam(':sanitizedSearchInput', $sanitizedSearchInput);
        $query->execute();
        return $query->fetchAll();
    }
}