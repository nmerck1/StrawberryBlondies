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
	  <a class="navbar-brand" href="index.php" style="padding:5px;"><img src="imgs/new_font.png" style="width:225px;" /></a>
	</div>
	<div class="collapse navbar-collapse" id="myNavbar">
	  <ul class="nav navbar-nav">
		<li><a href="index.php">Home</a></li>
		<li class="active"><a href="product_main.php">Products</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="gallery.php">Gallery</a></li>
		<li><a href="contact.php">Contact</a></li>
	  </ul>
	  <!--
	  <ul class="nav navbar-nav navbar-right">
		<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	  </ul>
	  -->
	</div>
  </div>
</nav>
 
 
<div class="container marketing">
	<div class="album text-muted">    
	 
	 <h2 style="text-align:center;">Categories</h2>
	<br>
	  <div class="row">
			<div class="col-sm-4">
				<a href="product_page.php">
					<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
					<p>stuff</p>
					<p>stuff about the thing</p>
				</a>
			</div>
			<div class="col-sm-4"> 
			  <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
			  <p>stuff</p>
			</div>
			<div class="col-sm-4"> 
			  <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
			  <p>stuff</p>  
			</div>
		
		</div><br>
		
		<div class="row">
			<div class="col-sm-4">
			  <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
			  <p>stuff</p>
			</div>
			<div class="col-sm-4"> 
			  <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
			  <p>stuff</p>
			</div>
			<div class="col-sm-4"> 
			  <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
			  <p>stuff</p>  
			</div>
		
		</div><br>
		
		<div class="row">
			<div class="col-sm-4">
			  <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
			  <p>stuff</p>
			</div>
			<div class="col-sm-4"> 
			  <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
			  <p>stuff</p>
			</div>
			<div class="col-sm-4"> 
			  <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
			  <p>stuff</p>  
			</div>
		
		</div><br>
	</div>	
</div>
<?php

	footer();

?>

</body>
</html>





















<?php


?>
