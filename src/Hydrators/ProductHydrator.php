<?php

namespace RobotStores\Hydrators;

class ProductHydrator
{

    static public function getAllProducts(): array
    {
        $dbConnection = \RobotStores\DbConnector::getConnection();
        $query = $dbConnection->prepare('SELECT `id`, `title`, `price`, `image` FROM `products`;');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS, '\RobotStores\Entities\BaseProduct');
        return $query->fetchAll();
    }
    static public function getFilteredProducts(int $characterId = null): array {
        if($characterId == null) {
            $products = self::getAllProducts();
        } else {
            $products = self::getProductsByCharacter($characterId);
        }
        return $products;
    }

    static public function getProduct(int $productId): \RobotStores\Entities\DetailedProduct
    {
        $dbConnection = \RobotStores\DbConnector::getConnection();
        $query = $dbConnection->prepare('SELECT `id`, `title`, `price`, `image`, `image2`, `image3`, 
                                                    `category_id` AS `categoryId`, `character_id` AS `characterId`, 
                                                    `description` FROM `products` WHERE `id` = ?;');
        $query->execute([$productId]);
        $query->setFetchMode(\PDO::FETCH_CLASS, '\RobotStores\Entities\DetailedProduct');
        return $query->fetch();
    }

    static private function getProductsByCharacter(int $characterId): array {
        $dbConnection = \RobotStores\DbConnector::getConnection();
        $query = $dbConnection->prepare('SELECT `id`, `title`, `price`, `image` FROM `products` WHERE `character_id` = ?;');
        $query->execute([$characterId]);
        $query->setFetchMode(\PDO::FETCH_CLASS, '\RobotStores\Entities\BaseProduct');
        return $query->fetchAll();
    }

}