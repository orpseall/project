<?php
require("../controllers/customer_controller.php");


// session_start();

if(isset($_POST['submit']))
  {
    $name=$_POST['customer_name'];
    $email=$_POST['customer_email'];
    $password=$_POST['customer_pass'];
    $country=$_POST['customer_country'];
    $city=$_POST['customer_city'];
    $contact=$_POST['customer_contact'];
    $userrole = 2;
    // $image= NULL;

    // echo "$name,$email,$country,$city,$contact,$userrole";
    $results = addCustomer_ctr($name,$email,$password,$country,$city,$contact,$userrole);
    
    
    if ($results) {
      header('location: ../view/login.php');
  } else {
      echo 'Registration Failed. Try again';
  }

  }

?>


