<?php








function import_bootstrap(){
	
	echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
}

function import_css_styles(){
	echo '<link rel="stylesheet" href="css/styles.css">';
}

function nav_bar(){
	
	
}

function google_fonts(){
	echo "<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>";

}


function footer(){
	$current_year = date('Y');
	echo '<footer class="container-fluid text-center" style="background-color:rgb(34, 34, 34);">
		  <p style="color:white;">Copyright &copy '.$current_year.' StrawberryBlondies All Rights Reserved</p>
		</footer>';
}























?>