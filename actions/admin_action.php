<?php
//making actuioin aware fof controller
include("../controllers/product_controller.php");



// collecting form data
if(isset($_POST['submitprod'])){
    // for image 
    // var_dump($pic);
 // I AM INTERESTED INN THE TWO OTHE RITEMS AND PUTTIGN THEM IN A VARIABLE
    
    $prodcat =$_POST['prodcat'];
    $prodbrand =$_POST['prodbrand'];
    $prodtitle =$_POST['product_title']; 
    $prodprice =$_POST['product_price'];
    $proddesc =$_POST['product_desc'];
    $prodkeywords=$_POST['product_keys'];
    $prodimage =$_FILES['prodimage']['name'];
    $targetdir= "../images/product/";
    $image = $targetdir . $prodimage;
    $file = '../images/product/' .basename($_FILES["product_image"]["name"]);
    move_uploaded_file($_FILES["product_image"]["tmp_name"],$file);
    
//     echo"$prodcat,$prodbrand,$prodtitle,$prodprice,$file";

//    echo "<img src='$file'>";
    
    echo $prodcat,$prodtitle,$prodprice,$prodbrand,$proddesc,$prodimage,$prodkeywords; 


  $result = addproduct_ctr($prodcat,$prodbrand,$prodtitle,$prodprice,$proddesc,$file,$prodkeywords);

    if ($result) {

        if (move_uploaded_file($_FILES["product_image"]["tmp_name"],"../images/product/".$_FILES["product_image"]["name"])) {
            echo "success";
    
        }else {
            echo "fail";
        }
        header("location:../admin/admin_product.php");

    } else{
         header("location:../admin/admin_product.php");
    }

}

?>