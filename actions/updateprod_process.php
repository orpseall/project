<?php
include('../controllers/product_controller.php');

if(isset($_POST['Updatep'])){
   $prod_id=$_POST['product_id'];
   $productcat=$_POST['category'];
   $productbrand=$_POST['brand'];
   $prod_title=$_POST['product_title'];
   $productprice=$_POST['product_price'];
   $prod_desc=$_POST['product_desc'];
   $prod_key=$_POST['product_keywords'];

   // $productimage=$_POST['prodimage'];

   $prodimage =$_FILES['prodimage']['name'];
   $targetdir= "../images/product/";
   $image = $targetdir . $prodimage;
   $file = '../images/product/' .basename($_FILES["prodimage"]["name"]);
   move_uploaded_file($_FILES["prodimage"]["tmp_name"],$file); 

  

   $result= editprod_ctr($prod_id,$productcat,$productbrand,$prod_title,$productprice,$prod_desc,$prod_key,$file);

   if($result){
    header("location:../admin/admin_product.php");
   }

   else{
    echo "Could not update";
   }
}
?>