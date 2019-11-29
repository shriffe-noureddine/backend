<?php

require_once 'Log.php';
require_once 'BankAccount.php';
require_once 'Client.php';

$bankAccount = new BankAccount('65145', 500, 200);
$eric = new Client('Eric', 'Male', 'Fake Address', $bankAccount);

// Doesn't work because not enough money
$eric->withdraw(600);

// Works
$eric->withdraw(100);
$eric->withdraw(90);

// Doesn't work because raise limit
//$eric->withdraw(50);
