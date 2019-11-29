<body>
	<?php

	/*
	- Exercise 1 :
		
		Based on the character exercise, display all his caracteristics 
		using a loop.

	*/


	$charImg = 'my_character.jpg';
	$charFirstName = 'Simon';
	$charLastName = 'Bertrand';
	$charCara = array(
		'Atk' => 20,
		'Def' => 15
	);
	?>


	<p>Name :
		<?php echo $charFirstName . ' ' . $charLastName ?>
	</p>
	<img src="<?php echo $charImg ?>" alt="">
	<ul>
		<?php
		foreach ($charCara as $key => $value)
			echo '<li>' . $key . ' : ' . $value . '</li>';
		?>
	</ul>

	<?php
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

	$array = array("Salad" => "1.03", "Tomato" => "2.3", "Oignon" => "1.85", "Red cabbage" => "0.85");
	//1. Sort by value
	asort($array);

	//2. Sort by key in descending order
	krsort($array);

	//	3. Use a loop to calculate the total of his spendings.
	$total = 0;
	foreach ($array as $cost) {
		$total += $cost;
	}

	echo 'Michel spent ' . $total . ' euros';

	/*
	- Exercise 3 :

	Using a loop, fill in a array with every number from 0 to 20.
	The element 0 will therefore contain 0,
	 the element 1 will contain 1 etc.

	Do it by using a for AND a while loop
	*/
	$myArray = array();
	for ($i = 0; $i <= 20; $i++) {
		$myArray[] = $i;
	}

	$myArray = array();
	$i = 0;
	while ($i <= 20) {
		$myArray[] = $i;
		$i++;
	}


	var_dump($myArray);

	/*
	-Exercise 4 :
	Use a loop to create a array.
	This array will contain the multiplication table of 2.
	From 1 to 10.
	*/

	$myArray = array();
	$multi = 2;
	for ($i = 0; $i <= 20; $i++) {
		$myArray[$i] = ($i * $multi);
	}

	var_dump($myArray);

	/*
	-Exercise 5 :
	Create a random array of numbers
	1. Find the max / min number of the array.
	You can't use any function.
	2. Find the position of the max/min also.
	*/
	// Create an array of random numbers.
	$myArray = array();
	for ($i = 0; $i <= 20; $i++) {
		$myArray[] = rand(-100, 100);
	}

	var_dump($myArray);

	$posMax = 0;
	$posMin = 0;

	foreach ($myArray as $key => $value) {
		if ($value > $myArray[$posMax]) {
			$posMax = $key;
		}

		if ($value < $myArray[$posMin]) {
			$posMin = $key;
		}
	}

	echo "The greatest value is : " . $myArray[$posMax] . "<br>";
	echo "And, it's position is : " . $posMax;
	echo "<br>";
	echo "The lowest value is : " . $myArray[$posMin] . "<br>";
	echo "And, it's position is : " . $posMin;




	?>

</body>