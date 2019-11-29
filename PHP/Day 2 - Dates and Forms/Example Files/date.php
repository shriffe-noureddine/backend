<?php
// Set the timezone
date_default_timezone_set('Europe/Luxembourg');
// Most known formats are : Y m d H i s

// Return the day's number
echo date('d') . '<br>';

// Return the day's number (without 0 in front)
echo date('j') . '<br>';

// Return the month's number
echo date('m') . '<br>';
// Same without 0
echo date('n') . '<br>';

// Return the year
echo date('Y') . '<br>';
// Last two digits of the year
echo date('y') . '<br>';
// Return the hour
echo date('H') . '<br>';
// Return the timestamp
echo date('U') . '<br>';

// Return the date of today
echo date('Y-m-d H:i:s');
