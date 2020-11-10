<?php


namespace RobotStores;


class ProductHydrator
{
    private array $productsArray;

    static public function getFilteredProducts(int $characterId = null):Array {
        if ($characterId == null) {
            $productsArray = self::getAllProducts();
        }
        else {
            // run ProductHydrator getProductsByCharacter() method
        }
        return $productsArray;
    }

static private function getAllProducts():Array {
    $dbConnection = DbConnector::getConnection();
    $query = $dbConnection->prepare('SELECT `id`, `title`, `price`, `image` FROM `products`');
    $query->execute();
    $query->setFetchMode(PDO::FETCH_CLASS, 'BaseProduct');
    return $query->fetchAll();
    }


}