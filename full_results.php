<?php

include("connection.php");

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
  $query = "SELECT * FROM SHOP ORDER BY CATEGORY"; //You don't need a ; like you do in SQL
  $result = mysqli_query($conn, $query);

  echo "<table style='width:85%;margin-left:auto;margin-right:auto;'>"; // start a table tag in the HTML
  echo "<tr class='white_text'  ><th>Item ID</th><th>Item Name</th><th>Item Category</th><th>Item Price €</th></tr>";
  while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr class='general_text'><td>" . $row['ITEM_ID'] . "</td><td>" . $row['ITEM_NAME'] . "</td><td>" . $row['CATEGORY'] . "</td><td>" . $row['PRICE'] . "</td></tr>";  //$row['index'] the index here is a field name
  }

  echo "</table>"; //Close the table in HTML


   ?>




  </body>
</html>
