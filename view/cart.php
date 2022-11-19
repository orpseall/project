<?php
include("../controllers/cart_controller.php");
include("../settings/core.php");

$c_id = get_id();
$cartitems = viewcart_ctr($c_id);


?>

<!doctype html>
<html lang="en">

<head>
    <title>Cart page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../css/bootsrap.min.css" rel="stylesheet">

</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>







    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Cart items</h5>
                        </div>
                        <div class="card-body">
                            <!-- Single item -->

                            <?php
                            foreach ($cartitems as $oneitem) {
                                $product_id = $oneitem['product_id'];
                                $product_title = $oneitem['product_title'];
                                $product_price = $oneitem['product_price'];
                                $product_image = $oneitem['product_image'];
                                $product_qty =  $oneitem['qty'];
                            



                                if ($product_qty == 1) {
                                 echo " 
                                    <div class='row'>
                                    <div class='col-lg-3 col-md-12 mb-4 mb-lg-0'>
                                    <!-- Image -->
                                    <div class='bg-image hover-overlay hover-zoom ripple rounded'
                                    data-mdb-ripple-color='light'>
                                    <img src=' ../images/$product_image' class='card-img-top' style='height: 200px ; ' >
                                        <div class='mask' style='background-color: rgba(251, 251, 251, 0.2)'></div>
                                    </a>
                                    </div>
                                    <!-- Image -->
                                    </div>
                                        
                                    <div class='col-lg-5 col-md-6 mb-4 mb-lg-0'>

                                        <!-- Data -->
                                        <p><strong> Name: $product_title <br></strong></p>
                                      
						                <a href='../actions/deletefromcart.php?deletecart=$product_id' class='btn btn-primary'>Remove</a>
						                <a href='../view/payment.php' class='btn btn-primary'>payment</a>

        
                                            <i class='fas fa-trash'></i>
                                        </button>
                    
                                        <!-- Data -->
                                        </div>
                                        <div class='col-lg-4 col-md-6 mb-4 mb-lg-0'>

                                        <div class='d-flex mb-4' style='max-width: 300px'>
                                            <a href='#' class='btn btn-primary'>-</a>
                                        <!-- Quantity -->
                                              <div>
                                                Quantity: $product_qty
                                              </div>
                                                 <a href='../actions/manage_qty_cart.php?inc=$product_id' class='btn btn-primary'>+</a>
                                            </div>
                                        <!-- Quantity -->
        
                                        <!-- Price -->
                                        <div>
                                           Price:  GHS $product_price
                                        </div>
                                        <!-- Price -->
                                    </div>
                                    </div>
                                    <!-- Single item -->
                                    <hr class='my-4'/> ";
                                }
                                else {
                                    echo " 
                                    <div class='row'>
                                    <div class='col-lg-3 col-md-12 mb-4 mb-lg-0'>
                                    <!-- Image -->
                                    <div class='bg-image hover-overlay hover-zoom ripple rounded'
                                    data-mdb-ripple-color='light'>
                                    <img src=' ../images/$product_image' class='card-img-top' style='height: 200px ; ' >
                                        <div class='mask' style='background-color: rgba(251, 251, 251, 0.2)'></div>
                                    </a>
                                    </div>
                                    <!-- Image -->
                                    </div>
                                        
                                    <div class='col-lg-5 col-md-6 mb-4 mb-lg-0'>

                                        <!-- Data -->
                                        <p><strong> Name: $product_title <br></strong></p>
                                      
						                <a href='../actions/deletefromcart.php?deletecart=$product_id' class='btn btn-primary'>Remove</a>
						                <a href='../view/payment.php' class='btn btn-primary'>payment</a>
        
                                            <i class='fas fa-trash'></i>
                                        </button>
                    
                                        <!-- Data -->
                                        </div>
                                        <div class='col-lg-4 col-md-6 mb-4 mb-lg-0'>

                                        <div class='d-flex mb-4' style='max-width: 300px'>
                                            <a href='../actions/deleteqty_cart.php?dec=$product_id' class='btn btn-primary'>-</a>
                                            
                                        <!-- Quantity -->
                                              <div>
                                                Quantity: $product_qty
                                              </div>
                                                 <a href='../actions/manage_qty_cart.php?inc=$product_id' class='btn btn-primary'>+</a>
                                            </div>
                                        <!-- Quantity -->
        
                                        <!-- Price -->
                                        <div>
                                           Price:  GHS $product_price
                                        </div>
                                        <!-- Price -->
                                    </div>
                                    </div>
                                    <!-- Single item -->
                                    <hr class='my-4' /> ";





                            }




                            }

                            ?>


                        </div>
                    </div>
                </div>
            </div>
    </section>
















</body>

</html>