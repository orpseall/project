
<?php
include('../controllers/customer_controller.php');

// $customer_id= $_GET['customer_id'];


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
				<li><a href="admin_product.php">Products</a></li>
				<li><a href="admin_orders.php">Orders</a></li>
				<li class="active"><a href="#">Users</a></li>
			</ul>
		</div>
	</header>
<br>
<br>
<br>
    <!-- adding a user -->
    <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Country</th>
            <th>City</th>
            <th>Contact</th>
            <th>Delete</th>
            <th>Update</th>

         </tr>
         </thead>


        <tbody>
            <?php
                $customer = viewallcustomers_ctr();
                foreach ((array) $customer as $acustomer) {
                  // $customer_id = $acustomer['customer_id'];
                    
                    $name = $acustomer['customer_name'];
                    $email = $acustomer['customer_email'];
                    $country = $acustomer['customer_country'];
                    $city = $acustomer['customer_city'];
                    $contact = $acustomer['customer_contact'];
           
                    echo"
                    <tr>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$country</td>
                    <td>$city</td>
                    <td>$contact</td>
                    <td><a href='../actions/delete_user.php?deletec={$acustomer['customer_id']}' class= 'btn btn-primary'>Delete</a></td>
                    <td><a href='../view/update_customer.php?customer_id={$acustomer['customer_id']}' class= 'btn btn-primary'>Update</a></td>";
                }
                ?>
        </tbody>

         
      </table>
   </div>


<!-- displaying product table -->
   

</div>




</body>
</html>