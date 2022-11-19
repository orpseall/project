<?php
require("../controllers/product_controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/shop.css"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
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

  
    <section class="padding-large">
        <div class="container">
            <div class="row">
			<div class="products-grid grid">
              

                    <?php
					$product = viewallprod_ctr();
					foreach ((array) $product as $aproduct) {
                    $product_title = $aproduct['product_title'];
                    $pcat = $aproduct['product_cat'];
                    $pbrand = $aproduct['product_brand'];
                    $pprice = $aproduct['product_price'];
                    $pdesc = $aproduct['product_desc'];
                    $pkey = $aproduct['product_keywords'];
                    $product_image = $aproduct['product_image'];

                   echo"
					
						<figure class='product-style'>
							<img src='../images/tab-item1.jpg' alt='Books' class='product-item'>
							<figcaption>
								<h3>$product_title</h3>
								<p>$pdesc</p>
								<i class='fa fa-cart-plus' aria-hidden='true'></i>
								<div class='item-price'>$pprice</div>
								<a href='../actions/add_to_cart.php?product_id={$aproduct['product_id']}'class='btn btn'>add to cart</a>
								<a href='../view/singleproduct.php?product_id={$aproduct['product_id']}' class= 'btn btn'>View</a>
							</figcaption>
						</figure>
					"
					;}?>

			</div> 
            </div>
        </div>
    </section>


</body>

</html>

</body>
</html>