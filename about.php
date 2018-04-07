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
		<li><a href="product_main.php">Products</a></li>
		<li class="active"><a href="about.php">About</a></li>
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

	
	<h2 style="text-align:center;">Meet the duo</h2>
	<br>
	<div class="row">
	
        <div class="col-lg-6">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="300" height="300">
          <h2>Marie</h2>
          <p> stuff about person blahblahblah blahblahblahblahblahblahblahblahblah blahblahblahblahblah</p>
		  <!--
          <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
		  -->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-6">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="300" height="300">
          <h2>Anna</h2>
          <p> stuff about person blahblahblahblahblahblah blahblahblahblahblah blahblahblahblahblahblah</p>
		  <!--
          <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
		  -->
        </div><!-- /.col-lg-4 -->
       
      </div>
	  
	  <hr class="featurette-divider">
	  
	  <h1 >How we got started</h1>
	  <div class="row">
	
        
       
      </div>
	  
	  <hr class="featurette-divider">
	  
	  <h1 >We love what we do</h1>
	  <div class="row">
	
        
       
      </div>
	  
</div>
<!--
 <div class="container marketing">


	<h3 style="text-align:center;">About</h3>
   
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 ">
          <h2 class="featurette-heading">Marie. <span class="text-muted"> </span></h2>
          <p class="lead">stuff about this person</p>
        </div>
        <div class="col-md-5 ">
          <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_162892c234a%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_162892c234a%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
	   
        <div class="col-md-7">
          <h2 class="featurette-heading">Anna. <span class="text-muted"> </span></h2>
          <p class="lead">stuff about this person</p>
        </div>
       <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_162892c234c%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_162892c234c%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
        </div>
      </div>

      <hr class="featurette-divider">


    </div>
	-->

<?php

	footer();

?>


</body>
</html>





















<?php


?>
