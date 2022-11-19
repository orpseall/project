<?php

include("../controllers/product_controller.php");
  if(isset($_POST['searchb'])) {
    // $text= $_POST['searchtext'];
    $searchitem = searchprod_ctr($_POST['searchtext']);
  }

  //to query add or product_keywords LIKE '%$jdf%'

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/product_search.css" rel="stylesheet">
    <link href="../css/bootsrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
    <title>Search Products Results</title>
</head>

<body>

    <form method="POST" action="../view/searchresults.php">
        <label>Search:</label><br>
        <input type="text" id="" name="searchtext" value=""><br>
        <input type="submit" name="searchb" value="Submit">
    </form>

    

</body>

</html>