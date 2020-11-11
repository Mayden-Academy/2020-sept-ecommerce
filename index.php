<?php
require('vendor/autoload.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tab Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="static/css/normalise.css" type="text/css" rel="stylesheet">
    <link href="static/css/style.css" type="text/css" rel="stylesheet">

</head>
<body>
    <header class="container-fluid robotHeader">
        <div class="sticky-top text-center align-middle">
            <h1 class="align-middle">Robot Stores</h1>
        </div>
    </header>
    <div class="container text-center">
        <div class="row">
        <?php
        foreach(ProductHydrator::getFilteredProducts() as $product) {
            echo '<div class="col-md-3 d-flex flex-column justify-content-around baseProduct">
                            <img src=" ' . $product->getImage() . '" alt="product image">
                            <h2>' . $product->getTitle() . '</h2>
                            <p>£' . $product->getPrice() . '</p>
                            <button type="button" class="btn btn-info btn-sm">View Item</button>
                         </div>';
        }
        ?>
        </div>
    </div>
    <footer class="container-fluid robotFooter">
        <div class="text-center">
            <h4>Moss Piglets 2020</h4>
        </div>
    </footer>
</body>
</html>
<?php
