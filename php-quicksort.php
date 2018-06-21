<?php

//$unsorted = array(43,21,2,1,9,24,2,99,23,8,7,114,92,5);

function losujElementy(){

	$unsorted=[];

	//mozna uzyc takze zmiennej globalnej
	//global $unsorted;

		for ($i=0;$i<10; $i++){

			$unsorted[$i]=rand(1,100000);


		}

		return $unsorted;

}



function quick_sort($array)
{
	// find array size
	$length = count($array);
	
	// base case test, if array of length 0 then just return array to caller
	if($length <= 1){
		return $array;
	}
	else{
	
		// select an item to act as our pivot point, since list is unsorted first position is easiest
		$pivot = $array[0];
		
		// declare our two arrays to act as partitions
		$left = $right = array();
		
		// loop and compare each item in the array to the pivot value, place item in appropriate partition
		for($i = 1; $i < count($array); $i++)
		{
			if($array[$i] < $pivot){
				$left[] = $array[$i];
			}
			else{
				$right[] = $array[$i];
			}
		}
		
		// use recursion to now sort the left and right lists
		return array_merge(quick_sort($left), array($pivot), quick_sort($right));
	}
}


echo "\n";

echo "nie posortowane";

echo "\n";

//tutaj wywolujemy tablic tworzącą elementy tablicy - w zakresie od 1 do 100
$unsorted=losujElementy();
print_r($unsorted);

echo "\n";

echo "posortowane";

echo "\n";


$unsorted = losujElementy();

$sorted = quick_sort($unsorted);
print_r($sorted);
















?>
