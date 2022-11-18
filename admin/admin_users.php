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
				<li><a href="admin.php">Products</a></li>
				<li><a href="admin_orders.php">Orders</a></li>
				<li class="active"><a href="#">Users</a></li>
			</ul>
		</div>
	</header>

    <!-- adding a user -->
    <div class="container">
        <div class="admin-product-form-container">
            <form action="../actions/admin_action.php" method="post">
                <h3>Add a new admin user</h3>
                <input type="text" placeholder="Name" name="name" class="box">
                <input type="text" placeholder="Username" name="username" class="box">
                <input type="email" placeholder="Email" name="email" class="box">
                <input type="password" placeholder="Password" name="password" class="box" required/>
                <input type="text" placeholder="Country" name="country" class="box">
                <input type="text" placeholder="City" name="city" class="box">
                <input type="number" placeholder="Contact" name="contact" class="box">
                <!-- submit -->
                <input type="submit" class="btn" name="submit" value="add user">
            </form>
        </div>
    </div>


<!-- displaying product table -->
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Country</th>
            <th>City</th>
            <th>Contact</th>
         </tr>
         </thead>

         
      </table>
   </div>

</div>




</body>
</html>