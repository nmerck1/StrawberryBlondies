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
		// make everything look crisp 
		import_bootstrap();
		import_css_styles();
		google_fonts();
	?>
</head>

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
		<li class="active"><a href="index.php">Home</a></li>
		<li><a href="product_main.php">Products</a></li>
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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
         <img src="imgs/home_pics/cupcakes2.jpg" style="width:1400px; height:400px;" alt="Image">
        <div class="carousel-caption">
          <!--
		  <h3>Sell $</h3>
          <p>Money Money.</p>
		  -->
        </div>      
      </div>

      <div class="item">
        <img src="imgs/home_pics/cupcakes1.jpg" style="width:1400px; height:400px;" alt="Image">
        <div class="carousel-caption">
           <!--<h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
		  -->
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  


<div class="container marketing">
	

	<div class="pv-30 feature-box text-center">
		<span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
		<h3>What we offer</h3>
		<div class="separator clearfix"></div>
		<p style="text-align: left">In today's market people use modern ways to find your business.  Let us help your business be more visible on the web by using these strategies:</p>
		<ul style="text-align: left">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
		<a class="btn btn-gray-transparent radius-50 btn-animated" href="/contact">Contact Us<i class="fa fa-angle-double-right"></i></a>
	</div>
</div>
	
<br>

<?php

	footer();

?>



</body>
</html>





















<?php


?>
