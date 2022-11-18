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
                <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
                <input type="submit" class="btn" name="add_product" value="add product">
            </form>
        </div>
    </div>


<!-- displaying product table -->
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
            <th>action</th>
         </tr>
         </thead>

         <!-- backend dynamic code goes here -->
      </table>
   </div>

</div>




</body>
</html>