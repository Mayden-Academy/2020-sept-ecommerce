<?php
$request = curl_init('https://dev.maydenacademy.co.uk/resources/store_products/products.json');
curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($request);
$data = json_decode($response, true);
curl_close($request);
$db = new PDO('mysql:host=db;dbname=robot_stores', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('DROP TABLE `products`');
$query->execute();
$query = $db->prepare('DROP TABLE `categories`');
$query->execute();
$query = $db->prepare('DROP TABLE `characters`');
$query->execute();
$query = $db->prepare('CREATE TABLE `products` (
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT \'\',
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT \'\',
  `category_id` int(11) NOT NULL,
  `character_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image2` varchar(255) DEFAULT \'\',
  `image3` varchar(255) DEFAULT \'\',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1');
$query->execute();
$query = $db->prepare('CREATE TABLE `characters` (
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT \'\',
  `image` varchar(255) NOT NULL DEFAULT \'\',
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1');
$query->execute();
$query = $db->prepare('CREATE TABLE `categories` (
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT \'\',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1');
$query->execute();
$query = $db->prepare('INSERT INTO `products` (`title`, `price`, `image`, `category_id`, `character_id`, `description`, `image2`, `image3`) VALUES (:title, :price, :image, :category_id, :character_id, :description, :image2, :image3)');
foreach ($data['products'] as $product) {
    if (!isset($product['image2'])){
        $product['image2'] = null;
    }
    if (!isset($product['image3'])){
        $product['image3'] = null;
    }
    $query->execute(['title' => $product['title'], 'price' => $product['price'], 'image' => $product['image'], 'image2' => $product['image2'], 'image3' => $product['image3'], 'category_id' => $product['cat'], 'character_id' => $product['char'], 'description' => $product['desc']]);
}
$query = $db->prepare('INSERT INTO `characters` (`name`, `image`, `description`) VALUES (:name, :image, :description)');
foreach ($data['characters'] as $character) {
    $query->execute(['name' => $character['name'], 'image' => $character['image'], 'description' => $character['desc']]);
}
$query = $db->prepare('INSERT INTO `categories` (`name`) VALUES (:name)');
foreach ($data['categories'] as $category) {
    $query->execute(['name' => $category['name']]);
}
echo "Data imported successfully.";