<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../css/signup_login.css">
</head>
<body>
<div id="bg">
    
</div>

<form method="GET">
    <h2>SIGNUP</h2>
    <!-- Name field -->
  <div class="form-field">
    <input type="text" name="customer_name" placeholder="Name" required/>
  </div>

  <!-- Email field -->
  <div class="form-field">
    <input type="email" name="customer_email" placeholder="Email" required/>
  </div>

  <!-- Password field -->
  <div class="form-field">
    <input type="password" name="customer_pass" placeholder="Password" required/>
  </div>


  <!-- Country field -->
  <div class="form-field">
    <input type="text" name="customer_country" placeholder="Country" required/>
  </div>

  <!-- City field -->
  <div class="form-field">
    <input type="text" name="customer_city" placeholder="City" required/>
  </div>
  
  <!-- Contact field -->
  <div class="form-field">
    <input type="text" name="customer_contact" placeholder="Contact" required/>                         </div>
  
    <!-- Submit button -->
  <div class="form-field">
    <button class="btn" type="submit" value="Signup">Signup</button>
  </div>

  <h3>Already registered? <a href="login.php">Login</a></h3>

</form>
</body>
</html>