<?php
include("connection.php");


$itemName = $_POST['search_item_name'];
$itemCatgory = $_POST['search_item_category'];
$itemLowPrice = $_POST['search_less_price'];
$itemHighPrice = $_POST['search_greater_price'];

 ?>


 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap stylesheets -->
     <title>Cloud Computing Assignment</title>
 	<!-- To incorporate Lato - a Google font -->
 	 <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet'  type='text/css'>

 	<!-- For social media buttons -->
 	<!-- The stylesheet where we add our own stylings -->
 	<link rel='stylesheet prefetch' href='http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

 	<link rel="stylesheet" href="css/style.css">

 </head>
 <body style="margin-bottom:100px;">

   <h1 style="text-align:center" class="general_text">Cloud Computing Assigment</h1>
  <p style="text-align:center"><a class="footer_links" href="../">Home</a></p>


  <?php

if(!empty($itemName))
{
  $query = "SELECT * FROM SHOP WHERE ITEM_NAME = '$itemName'";
  $result = mysqli_query($conn, $query);

  echo "<table style='width:85%;margin-left:auto;margin-right:auto;'>"; // start a table tag in the HTML
  echo "<tr class='white_text'  ><th>Item ID</th><th>Item Name</th><th>Item Category</th><th>Item Price €</th></tr>";
  while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr class='general_text'><td>" . $row['ITEM_ID'] . "</td><td>" . $row['ITEM_NAME'] . "</td><td>" . $row['CATEGORY'] . "</td><td>" . $row['PRICE'] . "</td></tr>";  //$row['index'] the index here is a field name
  }

  echo "</table>";
}

   ?>

   <h2 style="text-align:center;margin-top:100px" class="general_text">Search Again</h2>
   <a style="padding-left:30px;" class="footer_links" href="all_data">View all our inventory</a>
   <form id="form_design" method="POST" action="results">
       <div style="" class="bodypart">

         <h4 class="general_text">Search By Item</h3>
         <input class="input_text" type="text" placeholder="Name..." name="search_item_name">
</div>

  <div style="" class="bodypart">
        <h4 class="general_text">Search By Category</h3>
         <select name="search_item_category">
           <option value="Sport">Sport</option>
           <option value="Food">Food</option>
           <option value="Drink">Drink</option>
         </select>
</div>

  <div style="" class="bodypart">
         <h4 class="general_text">Search By Price</h3>
         <p class="general_text">Less than: <br><br><input class="input_text" type="text" placeholder="Price..." name="search_less_price"></p>
         <p class="general_text">Or greater than: <br><br><input class="input_text" type="text" placeholder="Price..." name="search_greater_price"></p>
         <p class="general_text">Input a value into each box to search for all items in between the two prices.</p>

         <input type="submit" value="Submit" name="search_submit">
</div>
       </form>

</body>
</html>
