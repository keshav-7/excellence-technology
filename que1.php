
<?php
    $array = array(1,5,3,2,7);
    $count = count($array);

    $sum = 0;

    for($i=0;$i<$count;$i++)
    	{
    		$sum += $array[$i];

    	}
    	echo "sum of array of numbers defined = ";

    	echo $sum;
?>