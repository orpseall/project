<?php
include("../settings/db_class.php");


class customer_class extends db_connection
{
    public function storeCustomer_cls($name,$email,$password,$country,$city,$contact,$userrole) 
	{

		$sqlQuery="INSERT INTO customer (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, user_role) VALUES('$name','$email','$password','$country','$city','$contact','$userrole')";

        //echo "$name,$email,$password,$country,$city,$contact,$userrole";
		return $this->db_query($sqlQuery);
	
	}
}