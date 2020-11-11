<?php
    require('methods.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="static/css/normalise.css" type="text/css" rel="stylesheet"> <!-- this makes sure all browsers start with the same style -->
    <link href="static/css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container-fluid">
            <h1>Robot Stores</h1>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
        <?php
        $object = new DetailedProduct();
        echo $object->displayDetailedProduct();
        ?>
        </div>
    </div>
    <footer></footer>
</body>
</html>