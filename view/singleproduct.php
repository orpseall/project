<?php
require("../controllers/product_controller.php");
$prod=viewoneprod_ctr($_GET['product_id']);
$brand = selectonebrand_ctr($prod['product_brand']);
$cat = selectonecat_ctr($prod['product_cat']);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Single product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/shop_style.css">
    <link rel="stylesheet" type="text/css" href="../css/shop.css">


    <link rel="stylesheet" type="text/css" href="../css/shop_style.css">
    <header>
        <!-- navbar -->
        <div class="logo">
            <img src="../images/logo_black.svg">
        </div>
        <div clas="main">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li class="active"><a href="#">Shop</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </header>



</head>

<body>
    <section class="bg-sand padding-large">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="<?php echo $prod['product_image']?>" alt="Generic placeholder image"
                        style='height: 400px ; '>
                </div>

                <div class="col-md-5 pl-6">
                    <div class="product-detail">
                        <h1>Title: <?php echo $prod['product_title']; ?></h1>
                        <p>Category: <?php echo $prod['product_desc']; ?></p>
                        <span class="price colored">Price: <?php echo $prod['product_price']; ?></span>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                        </p>
                        <?php
                            echo" 
						    <a href='../actions/add_to_cart.php?product_id={$prod['product_id']}' class='btn btn-lg btn-success mr-2' name='addToCartButton'> Add to Cart</a>"
                          ?>

                    </div>
                </div>

            </div>
        </div>
    </section>

</body>
</html>