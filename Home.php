<?php

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

	<link rel="stylesheet" href="style.css">

</head>
<body style="background:#dbdfe5">

  <h1 style="text-align:center" class="general_text">Cloud Computing Assigment</h1>

<div style="border-right: 1px solid #000000" class="body">
    		<h2 class="general_text">Search Our Inventory</h2>
        <a class="footer_links" href="#">View all our inventory</a>

      <form method="POST" action="">
        <h3 class="general_text">Search By Item</h3>
        <input class="input_text" type="text" placeholder="Name..." name="search_item_name">

      	<h3 class="general_text">Search By Category</h3>
        <select name="search_item_category">
          <option value="Sport">Sport</option>
          <option value="Food">Food</option>
          <option value="Drink">Drink</option>
        </select>


        <h3 class="general_text">Search By Price</h3>
        <p class="general_text">Less than: <input class="input_text" type="text" placeholder="Price..." name="search_less_price"></p>
        <p class="general_text">Or greater than: <input class="input_text" type="text" placeholder="Price..." name="search_greater_price"></p>
        <p class="general_text">Input a value into each box to search for all items in between the two prices.</p>

        <input type="submit" value="Submit" name="search_submit">

      </form>
</div>
<div style="border-right: 1px solid #000000;min-height: 500px;" class="body">
    <div class="">
    	<div class="">
    		<h2 class="general_text">Add to Our Inventory</h2>
    	</div>
      <p style="" class="lead">
      <form method="POST" action="">

        <h4 class="general_text">Item name</h4>
        <input class="input_text" type="text" placeholder="Name..." name="add_item_name">

        <h4 class="general_text">Item Category</h4>
        <select name="add_item_category">
          <option value="Sport">Sport</option>
          <option value="Food">Food</option>
          <option value="Drink">Drink</option>
        </select>

        <h4 class="general_text">Item price</h4>
        <input type="text" placeholder="Price..." name="add_item_price">
        <br><br>
        <input type="submit" value="Submit" name="add_submit">

      </form>


      </p>
    </div>
</div>
<div style="" class="body">
    <div class="">
    	<div class="">
    		<h2 class="general_text">Remove from Our Inventory</h2>
    	</div>
      <p style="" class="lead">TutorMe makes sure you never have to worry about a grind again.</p>
      <p><a href="register.html" target="_blank" class="btn btn-success btn-lg">Get started today</a></p>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">

</script>
</body>

</html>
