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
     function viewallcustomers_ctr(){
      $selectallcustomer = new customer_class();
        return $selectallcustomer->viewcustomer_cls();

    }

    function deleteOnecustomer_ctr($customer_id){
        $selectonecustomer = new customer_class();
        return $selectonecustomer->deletecustomer_cls($customer_id);

    }


    function viewonecustomer_ctr($customer_id){
        $selectonecustomer = new customer_class();
        return $selectonecustomer->viewonecustomer_cls($customer_id);
    }

    function editcustomer_ctr($customer_id,$customer_name,$customer_email,$customer_country,$customer_city,$customer_contact){
        $selectonecustomer = new customer_class();
        return $selectonecustomer->editcus_cls($customer_id,$customer_name,$customer_email,$customer_country,$customer_city,$customer_contact);
    }
