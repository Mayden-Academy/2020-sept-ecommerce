<?php

namespace RobotStores\Hydrators;

class ProductHydrator
{
    private array $productsArray;

    static public function getFilteredProducts(int $characterId = null):Array {
        $productsArray = self::getAllProducts();
        return $productsArray;
    }

    static private function getAllProducts():Array {
        $dbConnection = \RobotStores\DbConnector::getConnection();
        $query = $dbConnection->prepare('SELECT `id`, `title`, `price`, `image` FROM `products`');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS, 'RobotStores\Entities\BaseProduct');
        return $query->fetchAll();
    }

}