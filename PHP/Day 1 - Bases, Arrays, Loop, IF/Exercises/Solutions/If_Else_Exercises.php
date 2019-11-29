<body>
<?php 

/*- Exercice : 

-- Part 1 :
	Based on the 'character' exercise, make sure that, if its characteristic "Attak" or "Defense" are greater than 9, an additional message is displayed:

	<div class="alert">
    	<strong>Congratulations !</strong> Your character is ready to fight.</strong>
	</div>

-- Part 2 : 

		Add a conddition, if it is below 5, display message :

        <div class="alert">
            <strong>Wait !</strong> Your charachter is too weeeakk!
        </div>
*/

    $charImg = 'myimg.jpg';
    $charLastName = 'Bertrand';
    $charFirstName = 'Simon';
    $charCara = array(
    	'Atk' => 10,
    	'Def' => 15,
    	'Life' => 100
    );

 ?>

<hr>
<h2>Your character</h2>
<img src="<?php echo $charImg;?>">
<p>His name : <?php echo $charFirstName . ' / ' . $charLastName; ?></p>
<ul>
	<li>Life : <?php echo $charCara['Life']; ?></li>
	<li>Def : <?php echo $charCara['Def']; ?></li>
	<li>Atk : <?php echo $charCara['Atk']; ?></li>
</ul>

<?php 

	if($charCara['Atk'] > 9 || $charCara['Def'] > 9)
		echo "<div class='alert'><strong>Congratulations !</strong> Your character is ready to fight.</strong></div>";
	else if($charCara['Atk'] < 5 || $charCara['Def'] < 5)
		echo "<div class='alert'><strong>Wait !</strong> Your charachter is too weeeakk!</div>";

 ?>

</body>