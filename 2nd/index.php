<?php
	$price='$45';
	
	if (isset($price)) {
		echo " price is $price";
	}
	else{
		echo "opps";
	}


	$price_book='';
	
	if (isset($price_book)) {
		echo " price is $price_book <br>";
	}
	else{
		echo "opps <br>";
	}
	// isset checking


	if (empty($price_book)) {
		echo "opps <br>";
	}
	else{
		echo " price is $price_book <br>";
	}

	// empty checking


	$price_book2;
	
	if (isset($price_book2)) {
		echo " price is $price_book2 <br>";
	}
	else{
		echo "opps <br>";
	}
	
	if (empty($price_book2)) {
		echo "opps <br>";
	}
	else{
		echo " price is $price_book2 <br>";
	}

	// isset checking





	unset($price_book);

	echo "price is $price_book <br>";
	// usset checking



	$price_book = "$450";

	echo gettype($price_book);
	// gettype checking


	$arr = array();

	echo "$arr <br>";


	$arr = array('a');

	print_r($arr);


	var_dump($arr)




?>