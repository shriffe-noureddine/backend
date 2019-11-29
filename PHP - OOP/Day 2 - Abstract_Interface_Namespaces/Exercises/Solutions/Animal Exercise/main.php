<?php 

require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Human.php';
require_once 'Robot.php';

$garfield = new Cat('Garfield', 'Male', 'Orange');
//var_dump($garfield);
echo $garfield->meow();

echo '<br><br>';

$snoopy = new Dog('Snoopy', 'Male', 'White/Black');
//var_dump($snoopy);
echo $snoopy->bark();

echo '<hr>';

$elaine = new Human('Elaine', 'Woman', 'Brown');
//var_dump($liliana);
echo $elaine->talk();
echo $elaine->work();

echo '<br><br>';

$szabot = new Robot('Szabot', 'Silver');
echo $szabot->work();


 ?>