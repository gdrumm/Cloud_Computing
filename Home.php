<?php

include("connection.php");


$add_error=""; //variable to store error message;
$delete_response="";


if(isset($_POST['add_submit']))
{
	if(empty($_POST['add_item_name']) || empty($_POST['add_item_category']) || empty($_POST['add_item_price']))
	{
		$add_error = "All fields are required";
	}
  else
  {
    $item_name = mysqli_real_escape_string($conn, $_POST['add_item_name']);
    $item_category = mysqli_real_escape_string($conn, $_POST['add_item_category']);
    $item_price = mysqli_real_escape_string($conn, $_POST['add_item_price']);


    $data_insert = "INSERT INTO SHOP (ITEM_NAME, CATEGORY, PRICE) VALUES ('$item_name', '$item_category', '$item_price')";

    mysqli_query($conn, $data_insert);
        echo "<script language='javascript'>
          alert('Your entry has been added succesfully');

          </script>";

  }
}

if(isset($_POST['delete_submit']))
{
	if(empty($_POST['delete_item_name']))
	{
		$delete_response = "Must enter an item name.";
	}
  else
  {
    $item_name = mysqli_real_escape_string($conn, $_POST['delete_item_name']);


    $data_delete = "DELETE FROM SHOP WHERE ITEM_NAME = '$item_name';";

    $delete_response = $item_name . " has been succesfully deleted.";

    mysqli_query($conn, $data_delete);

  }
}

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
<body style="background:#ffffff;margin-bottom:100px;">

<div style="margin-top:0px;" class="header">
  <h1 style="text-align:center" class="general_text">Cloud Computing Assigment</h1>
  <p style="text-align:center"><a class="footer_links" href="">Home</a></p>
</div>

<div style="padding-top:20px;">
  <div style="" class="bodypart">
    <form id="form_design" method="POST" action="results">
      		<h2 class="general_text">Search Our Inventory</h2>
          <a class="footer_links" href="all_data">View all our inventory</a>

          <h4 class="general_text">Search By Item</h3>
          <input class="input_text" type="text" placeholder="Name..." name="search_item_name">

        	<h4 class="general_text">Search By Category</h3>
          <select name="search_item_category">
            <option value="Sport">Sport</option>
            <option value="Food">Food</option>
            <option value="Drink">Drink</option>
          </select>


          <h4 class="general_text">Search By Price</h3>
          <p class="general_text">Less than: <br><br><input class="input_text" type="text" placeholder="Price..." name="search_less_price"></p>
          <p class="general_text">Or greater than: <br><br><input class="input_text" type="text" placeholder="Price..." name="search_greater_price"></p>
          <p class="general_text">Input a value into each box to search for all items in between the two prices.</p>

          <input type="submit" value="Submit" name="search_submit">

        </form>
  </div>
  <div style="" class="bodypart">
        <form id="form_design" method="POST" action="">
        <p style="" class="lead">
          <h2 style="text-align:center;" class="general_text">Add to Our Inventory</h2>
          <h4 class="general_text">Item name *</h4>
          <input style="" class="input_text" type="text" placeholder="Name..." name="add_item_name">

          <h4 class="general_text">Item Category *</h4>
          <select name="add_item_category">
            <option value="Sport">Sport</option>
            <option value="Food">Food</option>
            <option value="Drink">Drink</option>
          </select>

          <h4 class="general_text">Item price *</h4>
          <input type="text" placeholder="Price..." name="add_item_price">
          <br><br>
          <input type="submit" value="Submit" name="add_submit">
          <br><br>
          <?php echo $add_error; ?>

        </form>


        </p>

  </div>
  <div style="" class="bodypart">
      	  <form method="POST" action="" id="form_design">
        		<h2 class="general_text">Remove from Our Inventory</h2>

            <p class="general_text">To remove something from our database you must do so by entering the item's name.</p>
            <h4 class="general_text">Item name *</h4>
              <input class="input_text" type="text" placeholder="Name..." name="delete_item_name">
              <br><br>
              <input type="submit" value="Submit" name="delete_submit">
            <br><br><h3 class="general_text"><?php echo $delete_response; ?></h3>
            <p class="general_text">If you aren't sure of the item's name, please search for it first using our search facility.</p>
          </form>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">

</script>
</body>

</html>
