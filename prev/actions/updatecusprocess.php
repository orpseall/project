<?php
require("../controllers/customer_controller.php");


// session_start();

if(isset($_POST['Updatec']))
  {
    $customer_id=$_POST['customer_id'];
    $name=$_POST['customer_name'];
    $email=$_POST['customer_email'];
    $country=$_POST['customer_country'];
    $city=$_POST['customer_city'];
    $contact=$_POST['customer_contact'];
    $userrole = 2;


    // echo "$name,$email,$country,$city,$contact,$userrole";
    $results = editcustomer_ctr($customer_id,$name,$email,$country,$city,$contact);
    
    
    if ($results) {
      header('location: ../admin/admin_users.php');
  } else {
      echo 'Registration Failed. Try again';
  }

  }

?>


