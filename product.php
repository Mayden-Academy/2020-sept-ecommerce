<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Page</title>
</head>
<body>
    <header>
        <h1>Robot Stores</h1>
    </header>
    <div class="container-fluid">
        <div class="row"> <?php displayProduct($product)?>
            <div class="Left col-sm-12 col-md-6">
                <div class="bigImage">
                    <image class="img-fluid" alt="Product Image">Item image</image>
                </div>
                <div class="smallImages">
<!--                    --><?php
//                        if image 2 = True echo image url; alt="second image"
//                        if image 3 = True echo image url; alt="third image"
//                    ?>
                </div>
            </div>
            <div class="Right col-sm-12 col-md-6">
                <div class="h-15">
                    <h2>Title Text</h2>
                </div>
                <div class="h-35">
                    <h4><?php $object->get(image2) ?></h4>
                    <p>Description</p>
                </div>
                <div class="h-15">
                    <h3>Price: X</h3>
                </div>
                <div class="h-35">
                    <div class="float-left">
                        <h4>Character</h4>
                        <p>Character description</p>
                    </div>
                    <image class="img-fluid float-right" alt="Character Image">Robot Image</image>
                </div>
            </div>
        </div>
    </div>
    <footer></footer>
</body>
</html>