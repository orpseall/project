<?php
require("../classes/customer_class.php");


function storeCustomer_ctr($name,$email,$password,$country,$city,$contact,$userrole)
{
    //create an instance of class
    $storeData=new customer_class();

    //echo "$name,$email,$password,$country,$city,$contact,$userrole";
    //run the method
    $storeData->storeCustomer_cls($name,$email,$password,$country,$city,$contact,$userrole);

    
}

  //--SELECT--//
    //login customer
    function select_onecustomer_ctr($email){
        $selectonecustomer = new customer_class();
        return $selectonecustomer->customer_login_cls($email);
    }

