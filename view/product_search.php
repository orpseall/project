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