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
    <link rel="stylesheet" type="text/css" href="../css/product_search.css">
    <link href="../css/bootsrap.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
     
    <!-- <title>Search Products Results</title> -->
</head>

<body>

    <div class="header">
      <!-- Search bar -->
      <form method="POST" action="../view/searchresults.php">

        <h1>Search for books</h1>

        
          <input type="hidden" name="searchtext" value="<?php echo $searchitem;?>">
          <input type="hidden" name="searchb" value="1">
          <input type="text" id="" name="searchtext" value="" class="search-field" placeholder="Author, Title...">
          <input type="submit" name="searchb" value="Search" class="search-btn"> 
        
          
          
          <!-- <input type="button" name="searchb" value="Submit" > -->
        
      </form>
    </div>

    

</body>

</html>