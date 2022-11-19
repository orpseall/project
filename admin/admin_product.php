<?php
include('../controllers/product_controller.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin.css">

   

</head>
<body>
    <header>
		<!-- navbar -->
		<div class="logo">
			<img src="../images/logo_black.svg">
		</div>
		<div class="main">
			<ul>
				<li class="active"><a href="#">Products</a></li>
				<li><a href="admin_orders.php">Orders</a></li>
				<li><a href="admin_users.php">Users</a></li>

			</ul>
		</div>
	</header>




<!-- add product form -->
    <div class="container">
        <div class="admin-product-form-container">
            <form action="../actions/admin_action.php" method="post">
                <h3>add a new product</h3>
                <input type="text" placeholder="Title" name="product_title" class="box">
                <input type="number" placeholder="Price" name="product_price" class="box">
                <input type="text" placeholder="Description" name="product_desc" class="box">
                <input type="text" placeholder="keywords" name="product_keys" class="box">

                <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
<br>
<br>
                <!-- brand selection -->
                <div>
                <label>Select brand</label>
                <select class="form-control" name="prodbrand">
                <?php 
                                    $brand_list = selectallBrand_ctr();
                                    if ($brand_list) {
    
                                        foreach ((array) $brand_list as $one_brand) {
                                            $brand_id = $one_brand['brand_id'];
                                            $brand_name = $one_brand['brand_name'];
                                            echo "<option value='$brand_id' > $brand_name </option>";
                                        }
                                    }else{
                                        echo "<option value='no_found'>No Brand found</option>";
                                    }
                                    ?>
                

               </select> 
                
               <!-- Category selection -->
               
               <label>Select category</label>
               <select class="form-control" name="prodcat">
                <?php 
                                    $category_list = selectallcat_ctr();
                                    if ($category_list) {
                                        foreach ((array) $category_list as $one_category) {
                                            $cat_id = $one_category['cat_id'];
                                            $cat_name = $one_category['cat_name'];
                                            echo "<option value='$cat_id'>$cat_name</option>";
                                        }
                                    }else{
                                        echo "<option value='no_found'>No Category found</option>";
                                    }
                                    ?>
               </select> 
               </div>
               <br>
            
                <input type="submit" class="btn" name="submitprod" value="add product">
            </form>
        </div>
    </div>
<br><br>

<!-- displaying product table -->
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Title</th>
            <th>brand</th>
            <th>category</th>
            <th>price</th>
            <th>description</th>
            <th>keywords</th>
            <th>image</th>
            <th>Delete</th>
            <th>Update</th>

            
         </tr>
         </thead>


        <tbody>
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
                    <tr>
                    <td>$product_title</td>
                    <td>$pcat</td>
                    <td>$pbrand</td>
                    <td>$pprice</td>
                    <td>$pdesc</td>
                    <td>$pkey</td>
                    <td><img src=' ../images/$product_image' class='card-img-top' style='width: 50px; height: 50px ; ' ></td>
                    <td><a href='../view/single_product.php?product_id={$aproduct['product_id']}' class= 'btn btn-primary'>Delete</a></td>
                    <td><a href='../view/update_product.php?product_id={$aproduct['product_id']}' class= 'btn btn-primary'>Update</a></td>";
                }
                ?>
        </tbody>
    </table>

         <!-- backend dynamic code goes here -->
      </table>
   </div>

</div>




</body>
</html>