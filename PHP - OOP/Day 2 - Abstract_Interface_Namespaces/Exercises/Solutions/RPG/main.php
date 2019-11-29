<?php

require_once 'Adventurer.php';
require_once 'Orc.php';
require_once 'Elf.php';

$myOrc = new Orc('Just A Name');
$myElf = new Elf('Just A Differente Name');
$myOrc->attack($myElf);
