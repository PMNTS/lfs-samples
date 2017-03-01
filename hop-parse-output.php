<?php
// A new array to store the final parameters
$finalParams = array();
// Split the $outputDecrypted string on the hat (^) charater
$parts = explode("^", $outputDecrypted);

// Iterate over each $part and..
foreach($parts as $val){
	// ..split again on the equals (=) character
	$pair = explode("=", $val);
	// Store the key and value in the array
	// In $pair, array index 0 is the name, and index 1 is the value
	$finalParams[$pair[0]] = $pair[1];
}

// We can now access the final parameters and make use of them, e.g:
if($finalParams['eapps_appStatus'] == "Approved"){
	echo "<p>Well done, <a href='/shop/home.php'>let's go shopping!</a></p>";
} else {
	echo "<p>Sorry that didn't work out.</p>";
	echo "<p>Perhaps try a <a href='/shop/checkout.php'>different payment method</a>.</p>"
}
?>
