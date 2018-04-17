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
	
	<script type="text/javascript">
	
		function get_product_page(name){
			
			$.ajax({url: "product_page.php", success: function(result){
				$("#div1").html(result);
			}});
		}
	
	
	
	</script>
	
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
				<a href="product_page.php?name=cakes">
					<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" alt="Image">
				</a>	
					<h4 style="text-align:center; color:black;">Cakes</h4>
					<p style="text-align:center;">stuff about the thing</p>
				
			</div>
			<div class="col-sm-4">
				<a href="product_page.php?name=cupcakes">
					<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" alt="Image">
				</a>	
					<h4 style="text-align:center; color:black;">Cupcakes</h4>
					<p style="text-align:center;">stuff about the thing</p>
				
			</div>
			<div class="col-sm-4">
				<a href="product_page.php?name=tarts">
					<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" alt="Image">
				</a>	
					<h4 style="text-align:center; color:black;">Tarts</h4>
					<p style="text-align:center;">stuff about the thing</p>
				
			</div>
		
		</div><br>
		
		<div class="row">
			<div class="col-sm-4">
				<a href="product_page.php?name=pies">
					<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" alt="Image">
				</a>	
					<h4 style="text-align:center; color:black;">Pies</h4>
					<p style="text-align:center;">stuff about the thing</p>
				
			</div>
			<div class="col-sm-4">
				<a href="product_page.php?name=brownies">
					<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" alt="Image">
				</a>	
					<h4 style="text-align:center; color:black;">Brownies</h4>
					<p style="text-align:center;">stuff about the thing</p>
				
			</div>
			<div class="col-sm-4">
				<a href="product_page.php?name=breads">
					<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" alt="Image">
				</a>	
					<h4 style="text-align:center; color:black;">Breads</h4>
					<p style="text-align:center;">stuff about the thing</p>
				
			</div>
		
		</div><br>
		
		<div class="row">
			<div class="col-sm-4">
				<a href="product_page.php?name=scones">
					<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" alt="Image">
				</a>	
					<h4 style="text-align:center; color:black;">Scones</h4>
					<p style="text-align:center;">stuff about the thing</p>
				
			</div>
			<div class="col-sm-4">
				<a href="product_page.php?name=cookies">
					<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" alt="Image">
				</a>	
					<h4 style="text-align:center; color:black;">Cookies</h4>
					<p style="text-align:center;">stuff about the thing</p>
				
			</div>
		
		
		</div><br>
	</div>	
</div>



<?php

	//get_products();
	echo '<br>';
	//get_flavors();

	footer();

?>

</body>
</html>


<?php


?>
