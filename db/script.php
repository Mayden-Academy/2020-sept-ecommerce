<?php
$request = curl_init('https://dev.maydenacademy.co.uk/resources/store_products/products.json');
curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($request);
$data = json_decode($response, true);
curl_close($request);


$db = new PDO('mysql:host=db;dbname=robot_stores', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('INSERT INTO `products` (`title`, `price`, `image`, `category_id`, `character_id`, `description`, `image2`, `image3`) VALUES (:title, :price, :image, :category_id, :character_id, :description, :image2, :image3)');
foreach ($data['products'] as $product) {
    $query->execute(['title' => $product['title'], 'price' => $product['price'], 'image' => $product['image'], 'image2' => $product['image2'], 'image3' => $product['image3'], 'category_id' => $product['cat'], 'character_id' => $product['char'], 'description' => $product['desc']]);
}

$query = $db->prepare('INSERT INTO `characters` (`name`, `image`, `description`) VALUES (:name, :image, :description)');
foreach ($data['characters'] as $character) {
    $query->execute(['name' => $character['name'], 'image' => $character['image'], 'description' => $character['desc']]);
}



//
