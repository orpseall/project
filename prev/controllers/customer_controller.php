<?php
require("../classes/customer_class.php");


function addCustomer_ctr($fullname,$email,$password,$country,$city,$contactnumber,$userrole){
    //create an instance of the class means that in this fucntion now i can run all the cls methods in the contact_class file
    // instance is add_item then new and the naem of the class in the contact_class file 
    $add_item= new customer_class();

    return $add_item->addCustomer_cls($fullname,$email,$password,$country,$city,$contactnumber,$userrole); 

    //run the method 

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
