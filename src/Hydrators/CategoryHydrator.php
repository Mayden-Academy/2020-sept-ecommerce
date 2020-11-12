<?php


namespace RobotStores\Hydrators;


class CategoryHydrator
{
    static public function getCategory(int $categoryId): \RobotStores\Entities\Category
    {
        $dbConnection = \RobotStores\DbConnector::getConnection();
        $query = $dbConnection->prepare('SELECT `id`, `name` FROM `categories` WHERE `id` = ?;');
        $query->execute([$categoryId]);
        $query->setFetchMode(\PDO::FETCH_CLASS, '\RobotStores\Entities\Category');
        return $query->fetch();
    }
}