<?php


namespace RobotStores\Hydrators;


class CharacterHydrator
{
    static public function getCharacter(int $characterId): \RobotStores\Entities\Character
    {
        $dbConnection = \RobotStores\DbConnector::getConnection();
        $query = $dbConnection->prepare('SELECT `id`, `name`, `image`, `description` FROM `characters` WHERE `id` = (?);');
        $query->execute([$characterId]);
        $query->setFetchMode(\PDO::FETCH_CLASS, '\RobotStores\Entities\Character');
        return $query->fetch();
    }
}