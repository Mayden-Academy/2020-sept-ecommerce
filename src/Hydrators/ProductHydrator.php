<?php

namespace RobotStores\Hydrators;

class ProductHydrator
{
    private array $productsArray;

    static public function getFilteredProducts(): array
    {
        return self::getAllProducts();
    }

    static private function getAllProducts(): array
    {
        $dbConnection = \RobotStores\DbConnector::getConnection();
        $query = $dbConnection->prepare('SELECT `id`, `title`, `price`, `image` FROM `products`;');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS, 'RobotStores\Entities\BaseProduct');
        return $query->fetchAll();
    }

}