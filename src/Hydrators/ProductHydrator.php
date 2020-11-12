<?php

namespace RobotStores\Hydrators;

class ProductHydrator
{
    static public function getAllProducts(): array
    {
        $dbConnection = \RobotStores\DbConnector::getConnection();
        $query = $dbConnection->prepare('SELECT `id`, `title`, `price`, `image` FROM `products`;');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS, 'RobotStores\Entities\BaseProduct');
        return $query->fetchAll();
    }

}