<?php
include("../settings/db_class.php");


class customer_class extends db_connection
{
    function storeCustomer_cls($name,$email,$password,$country,$city,$contact,$userrole) 
	{


		$finalpassword= password_hash($password,PASSWORD_DEFAULT);
       
		$sqlQuery="INSERT INTO `customer` (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, user_role) VALUES('$name','$email','$finalpassword','$country','$city','$contact','$userrole')";

        //echo "$name,$email,$password,$country,$city,$contact,$userrole";
		return $this->db_query($sqlQuery);
	
	}


    //--SELECT--//
	//login customer 

	function customer_login_cls($email){
		$sql = "SELECT * FROM customer WHERE customer_email ='$email'";
		return $this->db_fetch_one($sql);		
	}

}