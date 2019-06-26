<?php

	/*
	- Exercise 1 :
		
		Write a PHP script which displays this pattern : 
			* 
			* * 
			* * * 
			* * * * 
			* * * * * 

		You have to use a loop inside another loop to do this !

	*/
	$astrisco = "*";

	for($line = 0; $line <= 4; $line++){
		for($i = 0; $i <= $line; $i++){
			echo $astrisco;
		}
		echo "<br>";
	};

echo "<hr>";
	/*
	- Exercise 2 : 
		Write a PHP script which displays this pattern : 
		* 
		* * 
		* * * 
		* * * * 
		* * * * * 
		* * * * * 
		* * * * 
		* * * 
		* * 
		* 

	*/
	$astrisco = "*";

	for($line = 0; $line <= 4; $line++){
		for($i = 0; $i <= $line; $i++){
			echo $astrisco;
		}
		echo "<br>";
	};
	$maisastt = "*";
	for($b = 4; $b >= 0; $b--){
		for($linetwo = $b; $linetwo >=0 ; $linetwo--){
		echo $maisastt;
		};
	echo "<br>";
};
	/*
	- Exercise 3 : 

		We already have two arrays :*/
	    $artists = array(
	        0 => array("Eminem", "IAM"), 
	        1 => array("Madonna", "Katy Perry"), 
	        2 => array("Pink Floyd", "AC/DC")
	    );
    
	    $style = array(
	        0 => "Rap",
	        1 => "Pop", 
	        2 => "Rock"
		);   

		$count = count($style);
    	$array3 = array();
		
			for($i=0; $i<$count; $i++){
				$array3[$style[$i]] = $artists[$i];
			};

		var_dump($array3);
		 
		/*
	-Exercise 4 :
	
		We have an array of bank transactions, which indicates the credit and debit amounts of each person.
		For each person, calculate the real amount of their account and it as a key/value in the array.*/

		$transactions = array(
		    "Marie" => array(
		        "debit"=>6,
		        "credit"=>9
		    ),
		    "Julien" => array(
		        "debit"=>21,
		        "credit"=>19
		    ),
		    "Sophie" => array(
		        "debit"=>15,
		        "credit"=>14
		    ),
		    "John" => array(
		        "debit"=>10,
		        "credit"=>14
		    )
		);
	$larguer = count($transactions);
	echo $larguer;
		foreach($transactions as $key => $value){
			
			$transactions[$key]["amount"] = $value["credit"] - $value["debit"];
		};
		
	var_dump($transactions);

	/*
	- Final exercise - ONLY FOR THE BEASTS

		We have an array of integers, unsorted, with all numbers from 1 to 50 BUT one element is missing (the array is therefore 49).
		
		The goal is to find the missing item (the missing number).
		However, you have 3 constraints:
		- You have the right to LOOP the array only once!
		- You have the right to use only one variable!
		- You can not use functions (sorting etc ...)

		An example with an array with 9 elements :

			$array = array(5, 1, 3, 2, 9, 6 ,8, 4, 10);
	        // Le nombre manquant est 7

	        $var = ...

	        for (int i = 0; i < count($array); ++i)
	        {
	            ...
	        }

	        echo "Missing number is: " . $var;

	*/
$myArray = [];
$find;
for($i = 1; $i<=50; $i++){
	$myArray[$i] = $i;
	$find += $i;

};

$delete = rand(1, 50);

unset($myArray[$delete]);

var_dump($myArray);

foreach($myArray as $key){
	$find -= $key;
}

/*for($b = 1; $b<=count($myArray); $b++){
if($myArray[$b] == null)

$find = $b;


};*/

echo $find;