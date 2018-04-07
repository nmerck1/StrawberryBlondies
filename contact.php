<?php
include 'lib_functions.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>StrawberryBlondies</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		import_bootstrap();
		import_css_styles();
		google_fonts();
	?>
</head>

<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>                        
	  </button>
	  <a class="navbar-brand" href="index.php" style="padding:5px;"><img src="imgs/company_logo.png" style="width:225px;" /></a>
	</div>
	<div class="collapse navbar-collapse" id="myNavbar">
	  <ul class="nav navbar-nav">
		<li><a href="index.php">Home</a></li>
		<li><a href="product_main.php">Products</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="gallery.php">Gallery</a></li>
		<li class="active"><a href="contact.php">Contact</a></li>
	  </ul>
	  <!--
	  <ul class="nav navbar-nav navbar-right">
		<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	  </ul>
	  -->
	</div>
  </div>
</nav>


<div class="container">
	<br>
	<p class="lead" style="text-align:center; font-style:italic;"> We would love to hear from you! </p>
	
	<hr class="featurette-divider">
	
  <h2 style="text-align:center;">Contact Us</h2>
  <br>
  <form class="form-horizontal" action="/send_email.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Your Email:</label>
      <div class="col-sm-8">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Message:</label>
      <div class="col-sm-8">          
       <!-- <input type="text" class="form-control" id="message" placeholder="Message" name="message">-->
			<textarea class="form-control" style="height:125px;" placeholder="Message"></textarea> 
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
	
	
	
  </form>
</div>

<?php

	footer();

?>

</body>
</html>





















<?php


?>
