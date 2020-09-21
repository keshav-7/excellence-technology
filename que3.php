<?php 

function getMaxLength($array, $n) 
{ 
	//initialize count
	$count = 0; 
	
	// initialize max 
	$result = 0; 

	for ($i = 0; $i < $n; $i++) 
	{ 
		// Reset count when 0 is found 
		if ($array[$i] == 0) 
			$count = 0; 

		// If 1 is found, increment 
		// count and update result 
		// if count becomes more. 
		else
		{ 
			// increase count 
			$count++; 
			$result = max($result, $count); 
		} 
	} 

	return $result; 
} 

$array = array(1, 1, 0, 0, 1, 0, 1, 0, 1, 1, 1, 1); 
$n = sizeof($array) / sizeof($array[0]); 
echo "Max Length = ";
echo getMaxLength($array, $n); 

?>
