<?php
//implementation of the function
function bubble_Sort($my_array )
{
	do // repest till array not sorted
	{
		$swapped = false;
		for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )
		{
			if( $my_array[$i] > $my_array[$i + 1] )
			{
				list( $my_array[$i + 1], $my_array[$i] ) =
						array( $my_array[$i], $my_array[$i + 1] );
				$swapped = true;
			}
		}
	}
	while( $swapped ); // if swapped value then true, so continue else break
return $my_array;
}
echo "Enter values of array in a comma seprated form - like- 1,8,4,9\n"; //get set of values from user
$test_array = explode(',', readline()); //split the string into an array
echo "Original Array :\n";
echo implode(',',$test_array ); //print original array
echo "\nSorted Array\n:";
echo implode(', ',bubble_Sort($test_array)). PHP_EOL; //print sorted array
?>
