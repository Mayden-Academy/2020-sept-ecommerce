<?php
require('vendor/autoload.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Robot Stores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="static/css/style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <header class="container-fluid robotHeader">
        <div class="text-center align-middle">
            <h1 class="align-middle">Robot Stores</h1>
        </div>
    </header>
    <div class="filterContainer">
        <div class="filterLabel">
            <h3>Character Filter:</h3>
        </div>
        <form>
            <select name="characterFilter" id="characters">
                <option value="" selected>All</option>
                <?php
                $character = \RobotStores\Hydrators\CharacterHydrator::getCharacters();
                foreach($character as $filteredCharacter) {
                    echo '<option value="' . $filteredCharacter->getId() . '">' . $filteredCharacter->getName() . '</option>';

                }
                ?>
            </select>
            <input type="submit" value="Apply Filter">
        </form>

    </div>
    <div class="container text-center">
        <div class="row">
        <?php
        foreach(\RobotStores\Hydrators\ProductHydrator::getFilteredProducts($_GET["characterFilter"]) as $product) {
            echo '<div class="col-lg-3 col-md-6 col-sm-6 d-flex flex-column justify-content-between baseProduct">
                       <div>
                            <img src=" ' . $product->getImage() . '" alt="product image">
                            <h2>' . $product->getTitle() . '</h2>
                       </div>
                       <div>
                            <p>£' . $product->getPrice() . '</p>
                            <a class="btn btn-info btn-sm" role="button" href="product.php?id=' . $product->getID() . '">View Item</a>
                       </div>
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
