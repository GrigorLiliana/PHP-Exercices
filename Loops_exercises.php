<?php

	/*
	- Exercise 1 :
		
		Based on the character exercise, display all his caracteristics using a loop.

	*/

	/*
	- Exercise 2 : 
		Michel went to the supermarket and bought some food.
		He used an array to save his spending.

	    $array = array("Salad"=>"1.03","Tomato"=>"2.3","Oignon"=>"1.85","Red cabbage"=>"0.85")
	    Write a script that will : 
	    1. Sort by value
	    2. Sort by key in descending order
	    3. Use a loop to calculate the total of his spendings.

	*/
	echo "Exercise 2 :<br>";

	$array = array("Salad"=>"1.03","Tomato"=>"2.3","Oignon"=>"1.85","Red cabbage"=>"0.85");

	echo " 1 - Sort by value<br>"; 
	asort($array);
	 var_dump($array);

	 echo"<hr>";

	 echo " 2 - Sort by key in descending order<br>";
	 krsort($array);
	 var_dump($array);

	 echo"<hr>";

	 echo " 3. Use a loop to calculate the total of his spendings.<br>";
	 $spending = 0;
	foreach($array as $value){
		$spending = $spending + $value;
	}
	echo "The total of his spendings is: " . $spending . "€";

	echo"<hr>";
	/*
	- Exercise 3 : 
		Using a loop, fill in a array with every number from 0 to 20.
		The element 0 will therefore contain 0, the element 1 will contain 1 etc.

		Do it by using a for AND a while loop
	*/
	echo "Exercise 3 :<br>";
	echo "For Loop :<br>";
	$numbers;
	for($i = 0; $i<=20; $i++){
		$numbers[$i] = $i;
	}
	var_dump($numbers);

	echo"<hr>";

	echo "While Loop :<br>";
	$count;
	$n = 0;
	while($n<= 20){
		$count[$n] = $n;
		$n++;
	}
	var_dump($count);

	echo"<hr>";
	/*
	-Exercise 4 :
		Use a loop to create a array.
		This array will contain the multiplication table of 2.
		From 1 to 10.
	*/
	echo "Exercise 4:<br>";
	$tableTwo;
	for($i = 1; $i<=10; $i++){
		$tableTwo[$i] = $i * 2;
	}
	var_dump($tableTwo);
	echo"<hr>";
	/*
	-Exercise 5 :
		Create a random numerical array.
		Find the smallest value.
		Find the greatest value.
	*/
	echo "Exercise 5:<br>";
	$random;
	for($i = 1; $i<=10; $i++){
		$random[$i] = rand(0, 1000);
	}

	echo "smallest value:<br>";
	echo min($random) . "<br>"; 

	echo "greatest value:<br>";
	echo max($random) . "<br>"; 

	echo"<hr>";