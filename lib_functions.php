<?php





function protect($string){
	return htmlspecialchars($string);
}


function import_bootstrap(){
	
	echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
}

function import_css_styles(){
	echo '<link rel="stylesheet" href="css/styles.css">';
}

function get_products(){
	//$row = 1;
	if (($handle = fopen("arrays/products.csv", "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$num = count($data);
			//echo "<p> $num fields in line $row: <br /></p>\n";
			//$row++;
			for ($c=0; $c < $num; $c++) {
				echo $data[$c] . "<br />\n";
			}
		}
		fclose($handle);
	}
}

function get_flavors(){
	//$row = 2;
	if (($handle = fopen("arrays/flavors.csv", "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$num = count($data);
			//echo "<p> $num fields in line $row: <br /></p>\n";
			//$row++;
			for ($c=0; $c < $num; $c++) {
				echo $data[$c] . "<br />\n";
			}
		}
		fclose($handle);
	}
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

function get_product_flavors(){
	// create array to hold the flavors that each product can have
	$products = array
	  (
			"Cakes"=>"Vanilla:Hazelnut",
			"Cupcakes"=>"Vanilla:Hazelnut",
			"Tarts"=>"Blueberry:Strawberry",
			"Pies"=>"Blueberry:Strawberry", 
			"Brownies"=>"Vanilla:Hazelnut",
			"Breads"=>"Vanilla:Hazelnut",
			"Scones"=>"Vanilla:Hazelnut",
			"Cookies"=>"Vanilla:Hazelnut"
	  );
	  
	  
	  
	  
	  
}





















?>
