<?php
require('vendor/autoload.php');
if (empty($_GET['id'])) {
    header("Location: index.php");
}

$productID = $_GET['id'];

try {
    $product = \RobotStores\Hydrators\ProductHydrator::getProduct($productID);
} catch (\Exception $exception) {
    header("Location: index.php");
}

$imageTwo = '';
$imageThree = '';
if (!empty($product->getImage2())) {
    $imageTwo = '<div class="innerSecondaryImageContainer"><img src="' . $product->getImage2() . '"class="secondaryImages" alt="Product Image"></div>';
}
if (!empty($product->getImage3())) {
    $imageThree = '<div class="innerSecondaryImageContainer"><img src="' . $product->getImage2() . '"class="secondaryImages" alt="Product Image"></div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="static/css/style.css" type="text/css" rel="stylesheet">
    <link href="static/css/productpage.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="content">
        <header>
            <div class="container-fluid robotHeader">
                <div class="d-flex sticky-top justify-content-start">
                    <a href="index.php"><button class="homeButton float-left">Home</button></a>
                    <h1>Robot Stores</h1>
                </div>
            </div>
        </header>
        <div class="container-fluid">
            <div class="row detailProduct">
                <div class="productImages col-sm-12 col-md-6">
                    <div class="mainProductImageContainer">
                        <img src="<?php echo $product->getImage(); ?>"class="img-fluid" alt="Product Image">
                    </div>
                    <div class="outerSecondaryImageContainer">
                        <?php echo $imageTwo . $imageThree; ?>
                    </div>
                </div>
                <div class="productContent col-sm-12 col-md-6">
                    <div>
                        <h2 class="mb-4 text-center"><?php echo $product->getTitle();?></h2>
                    </div>
                    <div>
                        <h4 class="mt-2"><?php echo $product->getCategory()->getName(); ?></h4>
                        <p class="mb-4"><?php echo $product->getDescription(); ?></p>
                    </div>
                    <div>
                        <h3 class="mb-4 text-center"> Price: £<?php echo $product->getPrice(); ?></h3>
                    </div>
                    <div class="characterInfo">
                        <div class="float-left">
                            <h4 class="mt-2">Character: <?php echo $product->getCharacter()->getName(); ?></h4>
                            <p class="mt-2"><?php echo $product->getCharacter()->getDescription(); ?></p>
                        </div>
                        <div class="float-right characterImageContainer">
                            <img src="<?php echo $product->getCharacter()->getImage(); ?>" class="characterImage" alt="Character Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid robotFooter">
            <div class="text-center">
                <h4>Moss Piglets 2020</h4>
            </div>
        </div>
    </footer>
</body>
</html>